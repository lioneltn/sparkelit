<?php
// Ouverture ou récupération de la session
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>
<body>
<?PHP
    include "../../entities/comptes/client.php";
    include "../../core/comptes/clientC.php";

    if (isset($_SESSION['email'])) {
        $clientC = new ClientC();
        $result = $clientC->recupererClient($_SESSION['email']);
        foreach ($result as $row) {
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $datenaissance = $row['datenaissance'];
            $sexe = $row['sexe'];
            $password = $row['motdepasse'];
            $tel = $row['tel'];
            $code = $row['codePostal'];
            $addlivr = $row['adresse'];
        }
    }
    ?>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-middle sticky-header">
                <div class="container-fluid">
                    <div class="header-left">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li><a href="index.php">Accueil</a></li>
                                <li>
                                    <a href="category.php" class="sf-with-ul">Categories</a>
                                    <div class="megamenu megamenu-fixed-width">
                                        <div class="row">
                                        <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="menu-title">
                                                            <a href="#">Variations 1<span class="tip tip-new">New!</span></a>
                                                        </div>
                                                        <ul>
                                                            <li><a href="category-banner-full-width.php">Bannière pleine largeur<span class="tip tip-hot">Hot!</span></a></li>
                                                            <li><a href="category-banner-boxed-slider.php">Bannière Slider Box</a></li>
                                                            <li><a href="category-banner-boxed-image.php">Bannière image</a></li>
                                                            <li><a href="category-sidebar-left.php">Barre latérale de gauche</a></li>
                                                            <li><a href="category-sidebar-right.php">Barre latérale droite</a></li>
                                                            <li><a href="category-flex-grid.php">Produit Flex Grid</a></li>
                                                            <li><a href="category-horizontal-filter1.php">Filtre horizontal1</a></li>
                                                            <li><a href="category-horizontal-filter2.php">Filtre horizontal2</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <div class="menu-title">
                                                            <a href="#">Variations 2</a>
                                                        </div>
                                                        <ul>
                                                            <li><a href="#">Liste des produits Types d'articles</a></li>
                                                            <li><a href="category-infinite-scroll.php">Ajax Infinite Scroll</a></li>
                                                            <li><a href="category-3col.php">3 Colonnes Produits</a></li>
                                                            <li><a href="category-4col.php">4 Colonnes Produits <span class="tip tip-new">New</span></a></li>
                                                            <li><a href="category.php">5 Colonnes Produits</a></li>
                                                            <li><a href="category-6col.php">6 Colonnes Produits</a></li>
                                                            <li><a href="category-7col.php">7 Colonnes Produits</a></li>
                                                            <li><a href="category-8col.php">8 Colonnes Produits</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-6 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .col-lg-8 -->
                                            <div class="col-lg-4">
                                                <div class="banner">
                                                    <a href="#">
                                                        <img src="assets/images/menu-banner-2.jpg" alt="Menu banner">
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-lg-4 -->
                                        </div>
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a href="product.php" class="sf-with-ul">Produits</a>
                                    <div class="megamenu">
                                        <div class="row">
                                        <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="menu-title">
                                                            <a href="#">Variations</a>
                                                        </div>
                                                        <ul>
                                                            <li><a href="product.php">Miniatures horizontales</a></li>
                                                            <li><a href="product-full-width.php">Vignettes verticales<span class="tip tip-hot">Hot!</span></a></li>
                                                            <li><a href="product.php">Zoom intérieur</a></li>
                                                            <li><a href="product-addcart-sticky.php">Ajouter au panier</a></li>
                                                            <li><a href="product-sidebar-left.php">Onglets Accordéon</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="menu-title">
                                                            <a href="#">Variations</a>
                                                        </div>
                                                        <ul>
                                                            <li><a href="product-sticky-tab.php">Onglets collants</a></li>
                                                            <li><a href="product-simple.php">Produit simple</a></li>
                                                            <li><a href="product-sidebar-left.php">Avec barre latérale gauche</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="menu-title">
                                                            <a href="#">Types de disposition du produit</a>
                                                        </div>
                                                        <ul>
                                                            <li><a href="product.php">Mise en page par défaut</a></li>
                                                            <li><a href="product-extended-layout.php">Mise en page étendue</a></li>
                                                            <li><a href="product-full-width.php">Disposition pleine largeur</a></li>
                                                            <li><a href="product-grid-layout.php">Mise en page des images de grille</a></li>
                                                            <li><a href="product-sticky-both.php">Collant les deux côtés<span class="tip tip-hot">Hot!</span></a></li>
                                                            <li><a href="product-sticky-info.php">Information collante du côté droit</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-4 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .col-lg-8 -->
                                            <div class="col-lg-4">
                                                <div class="banner">
                                                    <a href="#">
                                                        <img src="assets/images/menu-banner.jpg" alt="Menu banner" class="product-promo">
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-lg-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Pages</a>

                                    <ul>
                                    <li><a href="cart.php">Chariot</a></li>
                                        <li><a href="#">Check-out</a>
                                            <ul>
                                                <li><a href="checkout-shipping.php">Paiement Expédition</a></li>
                                                <li><a href="checkout-shipping-2.php">Paiement Expédition 2</a></li>
                                                <li><a href="checkout-review.php">Vérification de la caisse</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Tableau de bord</a>
                                            <ul>
                                                <li><a href="dashboard.php">Tableau de bord</a></li>
                                                <li><a href="my-account.php">Mon compte</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.php">À propos de nous</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="single.php">Message de blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contactez nous</a></li>
                                        <li><a href="login.php"><?PHP if(isset($_SESSION['email'])){ echo "se déconnecter";} else {echo  "se connecter";} ?></a></li>
                                        <li><a href="forgot-password.php">Mot de passe oublié</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="sf-with-ul">Caractéristiques</a>
                                    <ul>
                                        <li><a href="#">Types d'en-tête</a></li>
                                        <li><a href="#">Types de pied de page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <a href="index.php" class="logo">
                            <img src="assets/images/Logoreduit.png" alt="Porto Logo" style="width: 92px;height: 49px">
                        </a>
                    </div><!-- End .header-center -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="63">- Games</option>
                                            <option value="7">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="31">- Cars and Trucks</option>
                                            <option value="32">- Motorcycles &amp; Powersports</option>
                                            <option value="33">- Parts &amp; Accessories</option>
                                            <option value="34">- Boats</option>
                                            <option value="57">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                    <button class="btn" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        
                        <div class="header-dropdowns">
                            <div class="header-dropdown">
                                <a href="#">USD</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">USD</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropown -->

                            <div class="header-dropdown">
                                <a href="#">ENG</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">ENG</a></li>
                                        <li><a href="#">FRE</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropown -->

                            <div class="header-dropdown">
                            <a href="#"><?PHP if(isset($_SESSION['email'])) echo "Salut ".$prenom; else echo "liens" ?></a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="my-account.php">Mon compte </a></li>
                                        <li><a href="#">AFFAIRE QUOTIDIENNE</a></li>
                                        <li><a href="#">MA LISTE D'ENVIES </a></li>
                                        <li><a href="blog.php">BLOG</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="login.php"><?PHP if(isset($_SESSION['email'])){ echo "se déconnecter";} else {echo  "se connecter";} ?></a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropown -->
                        </div><!-- End .header-dropdowns -->

                        <div class="header-contact">
                            <a href="tel:#">+216 55023485 </a>
                        </div><!-- End .header-contact -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <span class="cart-count">2</span>
                            </a>

                            <div class="dropdown-menu" >
                                <div class="dropdownmenu-wrapper">
                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="product.php">Woman Ring</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $99.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="product.php">Woman Necklace</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $35.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            </figure>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">$134.00</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="cart.php" class="btn">View Cart</a>
                                        <a href="checkout-shipping.php" class="btn">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container-fluid -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Electronics</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Headsets</li>
                    </ol>
                </div><!-- End .container-fluid -->
            </nav>
            <div class="container-fluid">
                <div class="product-single-container product-single-grid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="product-single-gallery popup-gallery">
                                <div class="row">
                                    <div class="col-6 product-item">
                                        <div class="inner">
                                            <img src="assets/images/products/zoom/product-1.jpg" data-zoom-image="assets/images/products/zoom/product-1-big.jpg" alt="product name">
                                            <span class="prod-full-screen">
                                                <i class="icon-plus"></i>
                                            </span>
                                        </div>
                                    </div><!-- End .col-6 -->
                                    <div class="col-6 product-item">
                                        <div class="inner">
                                            <img src="assets/images/products/zoom/product-2.jpg" data-zoom-image="assets/images/products/zoom/product-2-big.jpg" alt="product name">
                                            <span class="prod-full-screen">
                                                <i class="icon-plus"></i>
                                            </span>
                                        </div>
                                    </div><!-- End .col-6 -->
                                    <div class="col-6 product-item">
                                        <div class="inner">
                                            <img src="assets/images/products/zoom/product-3.jpg" data-zoom-image="assets/images/products/zoom/product-3-big.jpg" alt="product name">
                                            <span class="prod-full-screen">
                                                <i class="icon-plus"></i>
                                            </span>
                                        </div>
                                    </div><!-- End .col-6 -->
                                    <div class="col-6 product-item">
                                        <div class="inner">
                                            <img src="assets/images/products/zoom/product-4.jpg" data-zoom-image="assets/images/products/zoom/product-4-big.jpg" alt="product name">
                                            <span class="prod-full-screen">
                                                <i class="icon-plus"></i>
                                            </span>
                                        </div>
                                    </div><!-- End .col-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .product-single-gallery -->
                        </div><!-- End .col-md-8 -->

                        <div class="col-md-4">
                            <div class="product-single-details">
                                <h1 class="product-title">Porto Evolution Headset</h1>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->

                                    <a href="#" class="rating-link">( 6 Reviews )</a>
                                </div><!-- End .product-container -->

                                <div class="product-filters-container">
                                    <div class="product-single-filter">
                                        <label>Colors:</label>
                                        <ul class="config-swatch-list">
                                            <li class="active">
                                                <a href="#" style="background-color: #6085a5;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #ab6e6e;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #b19970;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #11426b;"></a>
                                            </li>
                                        </ul>
                                    </div><!-- End .product-single-filter -->

                                    <div class="product-single-filter">
                                        <label>Sizes:</label>
                                        <ul class="config-size-list">
                                            <li class="active"><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                        </ul>
                                    </div><!-- End .product-single-filter -->
                                </div><!-- End .product-filters-container -->

                                <div class="price-box">
                                    <span class="product-price">$101.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="cart.php" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>
                                </div><!-- End .product-action -->

                                <ul class="single-info-list">
                                    <li>AVAILABILITY: <strong>AVAILABLE</strong></li>
                                    <li>SKU: <strong>123456789</strong></li>
                                </ul>
                            </div><!-- End .product-single-details -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div><!-- End .product-single-container -->

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="false">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-size" data-toggle="tab" href="#product-size-content" role="tab" aria-controls="product-size-content" aria-selected="true">Size Guide</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Tags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                                <ul>
                                    <li><i class="icon-ok"></i>Any Product types that You want - Simple, Configurable</li>
                                    <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                    <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                                </ul>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade show active" id="product-size-content" role="tabpanel" aria-labelledby="product-tab-size">
                            <div class="product-size-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="assets/images/products/single/body-shape.png" alt="body shape">
                                    </div><!-- End .col-md-4 -->

                                    <div class="col-md-8">
                                        <table class="table table-size">
                                            <thead>
                                                <tr>
                                                    <th>SIZE</th>
                                                    <th>CHEST (in.)</th>
                                                    <th>WAIST (in.)</th>
                                                    <th>HIPS (in.)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>XS</td>
                                                    <td>34-36</td>
                                                    <td>27-29</td>
                                                    <td>34.5-36.5</td>
                                                </tr>
                                                <tr>
                                                    <td>S</td>
                                                    <td>36-38</td>
                                                    <td>29-31</td>
                                                    <td>36.5-38.5</td>
                                                </tr>
                                                <tr>
                                                    <td>M</td>
                                                    <td>38-40</td>
                                                    <td>31-33</td>
                                                    <td>38.5-40.5</td>
                                                </tr>
                                                <tr>
                                                    <td>L</td>
                                                    <td>40-42</td>
                                                    <td>33-36</td>
                                                    <td>40.5-43.5</td>
                                                </tr>
                                                <tr>
                                                    <td>XL</td>
                                                    <td>42-45</td>
                                                    <td>36-40</td>
                                                    <td>43.5-47.5</td>
                                                </tr>
                                                <tr>
                                                    <td>XLL</td>
                                                    <td>45-48</td>
                                                    <td>40-44</td>
                                                    <td>47.5-51.5</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- End .row -->
                            </div><!-- End .product-size-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                            <div class="product-tags-content">
                                <form action="#">
                                    <h4>Add Your Tags:</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" required>
                                        <input type="submit" class="btn btn-primary" value="Add Tags">
                                    </div><!-- End .form-group -->
                                </form>
                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                            </div><!-- End .product-tags-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                <div class="collateral-box">
                                    <ul>
                                        <li>Be the first to review this product</li>
                                    </ul>
                                </div><!-- End .collateral-box -->

                                <div class="add-product-review">
                                    <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                                    <p>How do you rate this product? *</p>

                                    <form action="#">
                                        <table class="ratings-table">
                                            <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th>1 star</th>
                                                    <th>2 stars</th>
                                                    <th>3 stars</th>
                                                    <th>4 stars</th>
                                                    <th>5 stars</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Quality</td>
                                                    <td>
                                                        <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Value</td>
                                                    <td>
                                                        <input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Price</td>
                                                    <td>
                                                        <input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="form-group">
                                            <label>Nickname <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label>Summary of Your Review <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group mb-2">
                                            <label>Review <span class="required">*</span></label>
                                            <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                        </div><!-- End .form-group -->

                                        <input type="submit" class="btn btn-primary" value="Submit Review">
                                    </form>
                                </div><!-- End .add-product-review -->
                            </div><!-- End .product-reviews-content -->
                        </div><!-- End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-single-tabs -->
            </div><!-- End .container-fluid -->

            <div class="featured-section bg-white">
                <div class="container-fluid">
                    <h2 class="carousel-title">Featured Products</h2>

                    <div class="featured-products owl-carousel owl-theme owl-dots-top">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php" class="product-image">
                                    <img src="assets/images/products/product-1.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php">Woman Fashion</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$189.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>

                                    <a href="product.php" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php" class="product-image">
                                    <img src="assets/images/products/product-2.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php">Dress</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$55.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>

                                    <a href="product.php" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php" class="product-image">
                                    <img src="assets/images/products/product-3.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php">Black Bottom</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$31.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>

                                    <a href="product.php" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php" class="product-image">
                                    <img src="assets/images/products/product-4.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php">Jumpsuit</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$335.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>

                                    <a href="product.php" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php" class="product-image">
                                    <img src="assets/images/products/product-5.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php">Sweatshirt</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$60.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>

                                    <a href="product.php" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .featured-proucts -->
                </div><!-- End .container-fluid -->
            </div><!-- End .featured-section -->

            <div class="mb-lg-3"></div><!-- margin -->
        </main><!-- End .main -->

        <footer class="footer">
            <div class="info-boxes-container">
                <div class="container">
                    <div class="info-box">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content">
                            <h4>FREE SHIPPING & RETURN</h4>
                            <p>Free shipping on all orders over $99.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-us-dollar"></i>

                        <div class="info-box-content">
                            <h4>MONEY BACK GUARANTEE</h4>
                            <p>100% money back guarantee</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4>ONLINE SUPPORT 24/7</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div><!-- End .container -->
            </div><!-- End .info-boxes-container -->

            <div class="container-fluid">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="widget widget-newsletter">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="widget-title">Subscribe newsletter</h4>
                                        <p>Get all the latest information on Events,Sales and Offers. Sign up for newsletter today</p>
                                    </div><!-- End .col-lg-6 -->

                                    <div class="col-lg-6">
                                        <form action="#">
                                            <input type="email" class="form-control" placeholder="Email address" required>

                                            <input type="submit" class="btn" value="Subscribe">
                                        </form>
                                    </div><!-- End .col-lg-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-md-9 -->

                        <div class="col-lg-2 widget-social">
                            <div class="social-icons">
                                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" target="_blank"><i class="icon-linkedin"></i></a>
                            </div><!-- End .social-icons -->
                        </div><!-- End .col-md-3 -->
                    </div><!-- End .row -->
                </div><!-- End .footer-top -->
            </div><!-- End .container-fluid -->

            <div class="footer-middle">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Info Contact</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Adresse:</span>04 Rue Babel Boumhal Bassatine Ben Arous
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Tel:</span>Gratuit <a href="tel:">(216) 55023485 </a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">benyounesfiras@gmail.com</a>
                                    </li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-4">
                                <div class="widget">
                                        <h4 class="widget-title">Mon compte</h4>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="about.php">A propros de nous</a></li>
                                                    <li><a href="contact.php">Contacter nous</a></li>
                                                    <li><a href="my-account.php">Mon compte</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="#">Historique des commandes</a></li>
                                                    <li><a href="#">Recherche Avancée</a></li>
                                                    <li><a href="login.php"><?PHP if(isset($_SESSION['email'])){ echo "se déconnecter";} else {echo  "se connecter";} ?></a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-4 -->

                                <div class="col-lg-5">
                                    <div class="widget">
                                        <h4 class="widget-title">Main Features</h4>
                                        
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="#">Super Fast Magento Theme</a></li>
                                                    <li><a href="#">1st Fully working Ajax Theme</a></li>
                                                    <li><a href="#">20 Unique Homepage Layouts</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                            <div class="col-sm-6">
                                            <ul class="links">
                                                    <li><a href="../backend/pages/samples/login.php">Panneau d'administration puissant</a></li>
                                                    <li><a href="../backend/pages/samples/login-2.php">Panneau d'artiste </a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-5 -->

                                <div class="col-lg-3">
                                    <div class="widget">
                                        <h4 class="widget-title">Jours / heures de travail</h4>
                                        <ul class="contact-info">
                                            <li>
                                            Du lundi au dimanche / de 9h00 à 20h00
                                            </li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-33 -->
                            </div><!-- End .row -->

                            <div class="footer-bottom">
                                <p class="footer-copyright">Porto eCommerce. &copy;  2018.  All Rights Reserved</p>
                                <img src="assets/images/payments.png" alt="payment methods" class="footer-payments">
                            </div><!-- End .footer-bottom -->
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .footer-middle -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li>
                        <a href="category.php">Categories</a>
                        <ul>
                            <li><a href="category-banner-full-width.php">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.php">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.php">Boxed Image Banner</a></li>
                            <li><a href="category-sidebar-left.php">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.php">Right Sidebar</a></li>
                            <li><a href="category-flex-grid.php">Product Flex Grid</a></li>
                            <li><a href="category-horizontal-filter1.php">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.php">Horizontal Filter 2</a></li>
                            <li><a href="#">Product List Item Types</a></li>
                            <li><a href="category-infinite-scroll.php">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                            <li><a href="category-3col.php">3 Columns Products</a></li>
                            <li><a href="category-4col.php">4 Columns Products</a></li>
                            <li><a href="category.php">5 Columns Products</a></li>
                            <li><a href="category-6col.php">6 Columns Products</a></li>
                            <li><a href="category-7col.php">7 Columns Products</a></li>
                            <li><a href="category-8col.php">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.php">Products</a>
                        <ul>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product.php">Horizontal Thumbnails</a></li>
                                    <li><a href="product-full-width.php">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product.php">Inner Zoom</a></li>
                                    <li><a href="product-addcart-sticky.php">Addtocart Sticky</a></li>
                                    <li><a href="product-sidebar-left.php">Accordion Tabs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product-sticky-tab.php">Sticky Tabs</a></li>
                                    <li><a href="product-simple.php">Simple Product</a></li>
                                    <li><a href="product-sidebar-left.php">With Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layout Types</a>
                                <ul>
                                    <li><a href="product.php">Default Layout</a></li>
                                    <li><a href="product-extended-layout.php">Extended Layout</a></li>
                                    <li><a href="product-full-width.php">Full Width Layout</a></li>
                                    <li><a href="product-grid-layout.php">Grid Images Layout</a></li>
                                    <li><a href="product-sticky-both.php">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product-sticky-info.php">Sticky Right Side Info</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li><a href="cart.php">Shopping Cart</a></li>
                            <li>
                                <a href="#">Checkout</a>
                                <ul>
                                    <li><a href="checkout-shipping.php">Checkout Shipping</a></li>
                                    <li><a href="checkout-shipping-2.php">Checkout Shipping 2</a></li>
                                    <li><a href="checkout-review.php">Checkout Review</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="#" class="login-link">Login</a></li>
                            <li><a href="forgot-password.php">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.php">Blog</a>
                        <ul>
                            <li><a href="single.php">Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                    <li><a href="#">Buy Porto!</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url(assets/images/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
            <img src="assets/images/logo-black.png" alt="Logo" class="logo-newsletter">
            <h2>BE THE FIRST TO KNOW</h2>
            <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                    <input type="submit" class="btn" value="Go!">
                </div><!-- End .from-group -->
            </form>
            <div class="newsletter-subscribe">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div><!-- End .newsletter-popup-content -->
    </div><!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>
</html>
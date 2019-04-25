<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Carnet d'adresse</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">

    <!-- Javascript File -->
    <script type="text/javascript" language="javascript" src="assets/js/my-account.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <?PHP
    include "../../entities/comptes/client.php";
    include "../../core/comptes/clientC.php";

    echo $_SESSION['email'];
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
            $region = $row['region'];
        }
    } else {
        header('Location: login.php');
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
                                    <a href="category.html" class="sf-with-ul">Categories</a>
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
                                    <a href="product.html" class="sf-with-ul">Produits</a>
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
                                        <li><a href="#">DAILY DEAL</a></li>
                                        <li><a href="#">MY WISHLIST </a></li>
                                        <li><a href="blog.html">BLOG</a></li>
                                        <li><a href="contact.html">Contact</a></li>
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

                            <div class="dropdown-menu">
                                <div class="dropdownmenu-wrapper">
                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">Woman Ring</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $99.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">Woman Necklace</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $35.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
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
                                        <a href="cart.html" class="btn">View Cart</a>
                                        <a href="checkout-shipping.html" class="btn">Checkout</a>
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
                        <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adresses</li>
                    </ol>
                </div><!-- End .container-fluid -->
            </nav>

            <div class="container mt-2">
                <div class="row">
                    <div class="col-lg-9 order-lg-last dashboard-content">
                        <h2>Modifier l'adresse</h2>

                        <form method="POST" name="acc_edit">
                            <div class="row">
                                <div class="col-sm-11">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="acc-name">Nom</label>
                                                <input type="text" class="form-control" id="firstName" name="firstName" value="<?PHP echo $nom ?>" onfocusout="validateFirstName(this)" required>
                                            </div><!-- End .form-group -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="acc-lastname">Prénom</label>
                                                <input type="text" class="form-control" id="lastName" name="lastName" value="<?PHP echo $prenom ?>" onfocusout="validateFirstName(this)" required>
                                            </div><!-- End .form-group -->
                                        </div><!-- End .col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .col-sm-11 -->
                            </div><!-- End .row -->

                            <div class="form-group required-field">
                                <label for="acc-tel">Téléphone</label>
                                <input type="number" class="form-control" id="numTel" name="numTel" value="<?PHP echo $tel ?>" onfocusout="validateNumTel(this)" required>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label for="acc-region">Région</label>
                                <?PHP $_POST['region'] = $region ?>
                                <select name="region" id ="region" class="form-control">
                                    <option value="tunis">Tunis </option>
                                    <option value="sfax">Sfax </option>
                                    <option value="sousse">Sousse </option>
                                    <option value="ariana">Ariana </option>
                                    <option value="kiarouan"> Kiarouan</option>
                                    <option value="bizerte"> Bizerte</option>
                                    <option value="gabès">Gabès </option>
                                    <option value="ben arous">Ben Arous </option>
                                    <option value="gafsa"> Gafsa</option>
                                    <option value="monastir"> Monastir</option>
                                    <option value="kasserine">Kasserine </option>
                                    <option value="la manouba"> La Manouba</option>
                                    <option value="medenine">Médenine </option>
                                </select>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label for="acc-code">Code Postal</label>
                                <input type="text" class="form-control" id="codePostal" name="codePostal" value="<?PHP echo $code ?>" onfocusout="validateCodePostal(this)" required>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label for="acc-add">Adresse de livraison</label>
                                <input type="text" class="form-control" id="addLivraison" name="addLivraison" value="<?PHP echo $addlivr ?>" required>
                            </div><!-- End .form-group -->

                            <div class="required text-right">* Champ requis</div>
                            <div class="form-footer">
                                <a href="dashboard.php"><i class="icon-angle-double-left"></i>précédent</a>

                                <div class="form-footer-right">
                                    <input type="submit" class="btn btn-primary" name = "modifier" id= "modifier" onclick="verification()" value = "modifier">
                                </div>
                            </div><!-- End .form-footer -->
                        </form>
                        <?PHP
                        
                        if (isset($_POST['modifier'])  and isset($_POST['firstName']) and isset($_POST['lastName']) and $_POST['numTel'] > 10000000 and $_POST['codePostal'] > 1000 ) {
                            $client1 = new Client($_POST['firstName'], $_POST['lastName'], "", "", $_SESSION['email'], "", $_POST['numTel'], $_POST['region'], $_POST['codePostal'], $_POST['addLivraison'], "");
                            $client1C = new ClientC();
                            $client1C->modifierClient_a($client1);
                            //header('Location: dashboard.php');
                            echo "<script> window.location.href='dashboard.php'</script>";
                            //header('Location : carnet-adresse.php');
                            echo "<div class=\"alert alert-success alert-intro\" role=\"alert\">modification reussite</div>";
                        } else {
                            //echo "errorr echec";
                        }
                        ?>
                    </div><!-- End .col-lg-9 -->

                    <aside class="sidebar col-lg-3">
                        <div class="widget widget-dashboard">
                            <h3 class="widget-title">Mon compte</h3>

                            <ul class="list">
                                <li><a href="dashboard.php">Tableau de bord</a></li>
                                <li><a href="my-account.php">Information sur le compte</a></li>
                                <li class="active"><a href="carnet-adresse.php">Carnet d'adresses</a></li>
                                <li><a href="#">Mes commandes</a></li>
                                <li><a href="#">Contrats de facturation</a></li>
                                <li><a href="#">Profils récurrents</a></li>
                                <li><a href="#">Mes critiques de produits</a></li>
                                <li><a href="#">Mes tags</a></li>
                                <li><a href="#">Ma liste d'envies</a></li>
                                <li><a href="#">Mes applications</a></li>
                                <li><a href="#">Abonnement à la Newsletter</a></li>
                                <li><a href="#">Mes produits téléchargeables</a></li>
                            </ul>
                        </div><!-- End .widget -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- margin -->
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
                                <p class="footer-copyright">Porto eCommerce. &copy; 2018. All Rights Reserved</p>
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
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <a href="category.html">Categories</a>
                        <ul>
                            <li><a href="category-banner-full-width.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">Product List Item Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                            <li><a href="category-3col.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product.html">Horizontal Thumbnails</a></li>
                                    <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product.html">Inner Zoom</a></li>
                                    <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                    <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                    <li><a href="product-simple.html">Simple Product</a></li>
                                    <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layout Types</a>
                                <ul>
                                    <li><a href="product.html">Default Layout</a></li>
                                    <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                    <li><a href="product-full-width.html">Full Width Layout</a></li>
                                    <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                    <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li>
                                <a href="#">Checkout</a>
                                <ul>
                                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                    <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                    <li><a href="checkout-review.html">Checkout Review</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="login.php"><?PHP if(isset($_SESSION['email'])){ echo "se déconnecter";} else {echo  "se connecter";} ?></a></li>
                            <li><a href="forgot-password.php">Mot de passe oublié</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="single.html">Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
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
<?php 
session_start();
$_SESSION["login"]=$_GET["login"];// doit ajouter une condition sur la session login
?>
<?php 
include "../../core/AdresseC.php";
$toggle;
$login2;
if(!empty($_SESSION["login"]))
   {
      extract($_SESSION);
       echo $login;
        $GLOBALS['login2']=$login;
     	$sql="SELECT COUNT(*) as 'nombre'
FROM adressetotal where email=:email";
    	$sql2="SELECT nom,prenom 
FROM utilisateur where email=:email";
    $db = config::getConnexion();
		try
		{
	     $req=$db->prepare($sql);
	     $req2=$db->prepare($sql2);
        $req->bindValue(':email',$login);
        $req2->bindValue(':email',$login);
        if($req->execute()){
            $rows=$req->fetchAll();
            if($rows[0]["nombre"]!='0'){
               // cela existe
                  $GLOBALS['toggle']=0;
            }
            else{
                $GLOBALS['toggle']=1;
            }
        }else{
             $GLOBALS['toggle']=1;
        }
            echo $toggle;
            if($req2->execute()){
                $rows=$req2->fetchAll();
                
                $GLOBALS['nom']=$rows[0]["nom"];
               $GLOBALS['prenom']=$rows[0]["prenom"];
                
            }
		
}
    catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	

    
   }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>checkout-review</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="Commande.css">
    <link rel="stylesheet" href="commandes.css">

   
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

                            <div class="dropdown-menu">
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

                    </ol>
                </div><!-- End .container-fluid -->
            </nav>

            <div class="container">
                <ul class="checkout-progress-bar">
                    <li>
                        <span>Connexion</span>
                    </li>
                    <li class="active">
                        <span>Commande</span>
                    </li>
                </ul>
                <div class="row">


                    <div class="col-lg-8 order-lg-first">
                        <div class="checkout-payment">
                            <h2 class="step-title step-title2" id="step1">Informations:</h2>

                            <!--<h4>Check / Money order</h4>-->

                            <div class="form-group-custom-control">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="change-bill-address" value="1">
                                    <!--  <label class="custom-control-label" for="change-bill-address">My billing and shipping address are the same</label>-->
                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-group -->

                            <div id="checkout-shipping-address">
                                <address>
                                    Desmond Mason <br>
                                    123 Street Name, City, USA <br>
                                    Los Angeles, California 03100 <br>
                                    United States <br>
                                    (123) 456-7890
                                </address>
                            </div><!-- End #checkout-shipping-address -->

                            <div id="new-checkout-address" class="show ">

                                <form action="" method="post" id="informations">
                                    <div class="form-group required-field" style>
                                        <label>Nom </label>

                                        <input type="text" class="form-control" id="firstName" oninput="controlSaisie(this)" required >

                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Prenom </label>
                                        <input type="text" class="form-control" required id="lastName" oninput="controlSaisie(this)" >
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label>Companie <i>(optionnel)</i> </label>
                                        <input type="text" class="form-control" id="company" oninput="controlSaisie(this)" >
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Adresse </label>
                                        <input type="text" class="form-control" required id="streetAddress1" oninput="controlSaisie(this)">
                                        <input type="text" class="form-control" id="streetAddress2" oninput="controlSaisie(this)" >

                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Ville </label>
                                        <input type="text" class="form-control" required id="city" oninput="controlSaisie(this)" >
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label>Pays</label>
                                        <div class="select-custom">
                                            <select id="country" class="form-control">
                                                <option value="CA">Tunisie</option>
                                            </select>
                                        </div><!-- End .select-custom -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Code postal\Zip </label>
                                        <input type="text" class="form-control" required id="zipCode" oninput="controlSaisie(this) " >
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label>Region</label>
                                        <div class="select-custom">
                                            <select class="form-control" id="region" >
                                                <option value="USA">Grand Tunis</option>
                                                <option value="Turkey">Sousse</option>
                                            </select>
                                        </div><!-- End .select-custom -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Numero de telephone </label>
                                        <div class="form-control-tooltip">
                                            <input type="tel" class="form-control" required id="phoneNumber" oninput="controlSaisie(this)" >
                                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->


                                    <div class="form-group-custom-control">
                                        <div class="custom-control custom-checkbox">

                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-group -->
                                    <input type="button" value="valider" class="btn btn-primary float-right "  bouton="1">

                                </form>
                            </div><!-- End #new-checkout-address -->
                              <form> 
                            <div class="form-group-custom-control" style="margin-bottom: 50px;">
                                <h1 class="step-title step-title2" style="margin-bottom: 25px;">Mode de paiement </h1>

                                <input type="radio" name="paiement" moi="a" id="cheque" required> <label>Cheque à la livraison</label><br>
                                <input type="radio" name="paiement" moi="b" required id="cash" > <label>Cash à la livraison</label><br>
                                <input type="radio" name="paiement" moi="c" required id="carteBancaire"> <label>Carte bancaire</label><br>
                                <input type="button" value="valider" class="btn btn-primary float-right" bouton="modePaiement" sytle="margin" >
                            </div>
                            
                            </form>

                            <div id="new-checkout-address" class="show ">

                                <form action="" method="post" id="paiement">
                                    <div class="form-group required-field" style>
                                        <label>Name on Card </label>

                                        <input type="text" class="form-control" id="firstName" name="CardName" oninput="controlSaisie(this)" required>

                                    </div><!-- End .form-group -->


                                    <div class="form-group required-field">
                                        <label>Credit Card Number </label>
                                        <input type="text" class="form-control" required id="cardNumber" oninput="controlSaisie(this)" name="CardNumber"  >
                                    </div><!-- End .form-group -->
                                    <div class="row">
                                        <div class="form-group required-field col-lg-4" style="margin-right:80px;">
                                            <label>Expiration Month </label>

                                            <input type="text" class="form-control" id="firstName" oninput="controlSaisie(this)" required name="ExpirationMonth" >

                                        </div><!-- End .form-group -->
                                        <div class="form-group required-field col-lg-4" style>
                                            <label>Expiration Year</label>
                                            <div class="select-custom">
                                                <select class="form-control" name="ExpirationYear">
                                                    <option value="Year">2019</option>
                                                    <option value="Year">2020</option>
                                                    <option value="Year">2021</option>
                                                    <option value="Year">2022</option>
                                                    <option value="Year">2023</option>
                                                    <option value="Year">2024</option>
                                                </select>
                                            </div><!-- End .form-group -->


                                        </div><!-- End .form-group -->

                                    </div>

                                    <div class="form-group required-field">
                                        <label>CVV </label>
                                        <div class="form-control-tooltip">
                                            <input type="tel" class="form-control" required id="CVV" oninput="controlSaisie(this)" name="CVV">
                                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->


                                    <div class="form-group-custom-control">
                                        <div class="custom-control custom-checkbox">

                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-group -->
                                    <input type="button" value="valider" class="btn btn-primary float-right "  bouton="2">

                                </form>
                            </div><!-- End #new-checkout-address -->
                            
                            
                            <h2 class="step-title step-title2">Adresse de Livraison</h2>

                            <div class="shipping-step-addresses">
                              
                               <?php 
                               
                             AdresseC::afficherAdresse($login);
                                
                              ?>
                   
                            </div><!-- End .shipping-step-addresses -->

                            <a href="#" class="btn btn-sm btn-outline-secondary btn-new-address" data-toggle="modal" data-target="#myModal">+ New Address</a>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Nouvelle adresse</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="new-checkout-address" class="show ">

                                                <form action="" method="post" id="informations2">
                                                    <div class="form-group required-field" style>
                                                        <label>Nom </label>

                                                        <input type="text" class="form-control" id="firstName2" oninput="controlSaisie(this)" required>

                                                    </div><!-- End .form-group -->

                                                    <div class="form-group required-field">
                                                        <label>Prenom </label>
                                                        <input type="text" class="form-control" required id="lastName2" oninput="controlSaisie(this)">
                                                    </div><!-- End .form-group -->

                                                    <div class="form-group">
                                                        <label>Companie <i>(optionnel)</i> </label>
                                                        <input type="text" class="form-control" id="company2" oninput="controlSaisie(this)">
                                                    </div><!-- End .form-group -->

                                                    <div class="form-group required-field">
                                                        <label>Adresse </label>
                                                        <input type="text" class="form-control" required id="streetAddress12" oninput="controlSaisie(this)">
                                                        <input type="text" class="form-control" id="streetAddress22" oninput="controlSaisie(this)">

                                                    </div><!-- End .form-group -->

                                                    <div class="form-group required-field">
                                                        <label>Ville </label>
                                                        <input type="text" class="form-control" required id="city2" oninput="controlSaisie(this)">
                                                    </div><!-- End .form-group -->

                                                    <div class="form-group">
                                                        <label>Pays</label>
                                                        <div class="select-custom" >
                                                            <select class="form-control" id="country2">
                                                                <option value="CA">Tunisie</option>
                                                            </select>
                                                        </div><!-- End .select-custom -->
                                                    </div><!-- End .form-group -->

                                                    <div class="form-group required-field">
                                                        <label>Code postal\Zip </label>
                                                        <input type="text" class="form-control" required id="zipCode2" oninput="controlSaisie(this)">
                                                    </div><!-- End .form-group -->

                                                    <div class="form-group">
                                                        <label>Region</label>
                                                        <div class="select-custom">
                                                            <select id="region2" class="form-control">
                                                                <option value="USA">Grand Tunis</option>
                                                                <option value="Turkey">Sousse</option>
                                                            </select>
                                                        </div><!-- End .select-custom -->
                                                    </div><!-- End .form-group -->

                                                    <div class="form-group required-field">
                                                        <label>Numero de telephone </label>
                                                        <div class="form-control-tooltip">
                                                            <input type="tel" class="form-control" required id="phoneNumber2" oninput="controlSaisie(this)">
                                                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                                        </div><!-- End .form-control-tooltip -->
                                                    </div><!-- End .form-group -->


                                                    <div class="form-group-custom-control">
                                                        <div class="custom-control custom-checkbox">

                                                        </div><!-- End .custom-checkbox -->
                                                    </div><!-- End .form-group -->
                                                    <input type="button" value="valider" class="btn btn-primary float-right "  bouton="3">

                                                </form>
                                            </div><!-- End #new-checkout-address -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <button type="button" class="btn btn-primary float-right " id="commander" style="margin-top:50px;" >Commander</button>










                            <div class="clearfix">
                                <!--<a href="#" class="btn btn-primary float-right" >Place Order</a>-->
                            </div><!-- End .clearfix -->
                        </div><!-- End .checkout-payment -->


                    </div><!-- End .col-lg-8 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
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
                                            <input type="email" class="form-control"  required>

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
    <!--     body transparence for popup-->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
    <script src="Commandes.js"></script>
    <script src="Commandes2.js"></script>
    <script src="../backend/vendors/js/vendor.bundle.base.js"></script>
    <script src="../backend/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../backend/js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../backend/js/alerts.js"></script>
    <script src="../backend/js/avgrund.js"></script>
    <script>
        $(function() {
            var toggle = "<?php echo $toggle ?>";
            if (toggle == 1) {
                $("#informations").show(2000);

            }
            var nom = "<?php echo $nom ?>";
            var prenom = "<?php echo $prenom ?>";
            var login2 = "<?php echo $login2 ?>";
            console.log(nom, prenom, login2, toggle);
            $("#firstName").val(prenom);
            $("#lastName").val(nom);
//             alert($("#region").val());
            $("[value='valider']").eq(0).click(function() {
                $.post("ajouterAdresse.php", {
                        adresse: $("#streetAddress1").val() + $("#streetAddress2").val(),
                        ville: $("#city").val(),
                        pays: $("#country").val(),
                        codePostal: $("#zipCode").val(),
                        tel: $("#phoneNumber").val(),
                        region: $("#region").val(),
                        login: login2,
                        companie: $("#company").val()
                    },
                    function(data, status) {

//                        alert(data, status);
                     showSwal('title-and-text');


                    });


            })
            
           
            var modePaiement="";
            var etat="";
            var date=new Date();
            var date2=date.getFullYear()+"-"+date.getMonth()+"-"+date.getDate()+ " "+ date.getHours()+":"+date.getMinutes()+":"+date.getSeconds();
            var totalPaiement="<?php echo $_SESSION['prixTotal']?>";
           
//            alert(totalPaiement+" "+idPanier);
            
            
             $("[value='valider']").eq(1).click(function(){
                 console.log($('[name="paiement"]').eq(0).is(':checked')+"mangerrt");
                 
                   if ($('[name="paiement"]').eq(0).is(':checked') ||$('[name="paiement"]').eq(1).is(':checked')|| $('[name="paiement"]').eq(2).is(':checked') ){
                        if ($('[name="paiement"]').eq(0).is(':checked')) {
                       modePaiement="Cheque à la livraison";
                       etat="non paye";
                   }
                       else if ($('[name="paiement"]').eq(1).is(':checked')) {
                           modePaiement="Cash à la livraison";
                           etat="non paye";
                       }
                       else if ($('[name="paiement"]').eq(2).is(':checked')) {
                           modePaiement="Carte bancaire";
                       etat="paye";}
                          $.post("ajouterCommande.php", {
                     
                        totalPaiement:totalPaiement ,
                        etat: etat,
                        date: date2,
                        login: login2,
                        modeDePaiment:  modePaiement
                    },
                    function(data, status) {

//                        alert(data, status);
                               showSwal('title-and-text');
//                              alert(data);


                    });

                       
                   }
                 
                 
            })
           
             $("[value='valider']").eq(2).click(function(){
//                  alert($("[ name='CardName']").val());
//                  alert($("[ name='CardNumber']").val());
//                  alert($("[ name='ExpirationMonth']").val());
//                  alert($("[ name='ExpirationYear']").val());
//                  alert($("[ name='CVV']").val());
                 if ($('[name="paiement"]').eq(2).is(':checked')) {
                           modePaiement="Carte bancaire";
                       etat="paye";}
                          $.post("ajouterCommande.php", {
                        totalPaiement:totalPaiement ,
                        etat: etat,
                        date: date2,
                        login: login2,
                        modeDePaiment:  modePaiement
                    },
                    function(data, status) {

//                        alert(data, status);
                               showSwal('title-and-text');
                              alert(data);


                    });
                  
                    $.post("ajouterBanque.php", {
                        cardName: $("[name='CardName']").val(),
                       cardNumber: $("[ name='CardNumber']").val(),
                        expirationMonth: $("[name='ExpirationMonth']").val(),
                        expirationYear: $("[name='ExpirationYear']").val(),
                        CVV: $("[name='CVV']").val(),
                        login:  login2
                    },
                    function(data, status) {

//                        alert(data, status);
                        showSwal('title-and-text');


                    });
                 
             })
            
            $("[value='valider']").eq(3).click(function() {
                 
                $.post("ajouterAdresse.php", {
                        adresse: $("#streetAddress12").val() + $("#streetAddress22").val(),
                        ville: $("#city2").val(),
                        pays: $("#country2").val(),
                        codePostal: $("#zipCode2").val(),
                        tel: $("#phoneNumber2").val(),
                        region: $("#region2").val(),
                        login: login2,
                        companie: $("#company2").val()
                    },
                    function(data, status) {

                    
                    


                    });


            })
            $("#commander").click(function(){
                showSwal('success-message');
                window.location.href="historique.php";
            })
            
            
        })
        
//        var x=document.getElementsByTagName("input");
//        for(let i=0;i<x.length;i++){
//            x[i].placeholder.style.color="red";
//        }
        

    </script>
</body>

</html>

<?php 

    
?>

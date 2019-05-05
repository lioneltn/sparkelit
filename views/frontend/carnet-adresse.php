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
        <?php include "header2.php";?>

        <main class="main">
            

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
                                
                            </ul>
                        </div><!-- End .widget -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- margin -->
        </main><!-- End .main -->

        <?php include "footer2.php";?>
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
                            <li><a href="login.php"><?PHP if(isset($_SESSION['email'])){ echo "se déconnecter";} else {echo  "se connecter";} ?></a></li>
                            <li><a href="forgot-password.php">Mot de passe oublié</a></li>
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
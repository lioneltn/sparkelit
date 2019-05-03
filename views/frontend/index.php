<?php
// Ouverture ou récupération de la session
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>5icha</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    
    <link rel="icon" type="image/x-icon" href="../meta/Logoreduit.png">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

   
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
        $_SESSION['prenom'] = $prenom;
    }
    ?>
    <div class="page-wrapper">
        <?php include "header3.php"; ?>

        <main class="main">
           <!-- <div class="home-slider-container">-->
                <div class="home-slider owl-carousel owl-theme">
                   <!-- <div class="home-slide">
                        <div class="slide-bg owl-lazy" data-src="assets/images/slider/slide-1.jpg"></div>-->
                        <?php 
chdir(__DIR__);
include "../afficherImage2.php";
chdir(__DIR__);         
 ?>

                       <!-- <div class="home-slide-content container">
                            <div class="slide-text">Jusqu'a<br>
                                <div>
                                    <span class="slide-sale">50</span>
                                    <span>
                                        <span class="slide-perc">%</span><br>
                                        OFF
                                    </span>
                                </div>
                            </div>
                            <h1>Remise d'été</h1>
                            <h3>Commencant de <strong>49.9dt</strong></h3>
                            <a href="category.php" class="btn btn-primary">Acheter maitenant</a>
                        </div>-->
                    </div>

                </div>
            </div>

           

            <div class="half-section">
                <div class="row no-gutters">
                    <div class="col-md-6 order-md-last half-img" style="background-image: url('assets/images/bg-1.jpg');">
                        <h2 class="half-title">Men's<br>Collection</h2>
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="half-content">
                            <div class="title-group">
                                <h2 class="subtitle">Nouvelle collection pour homme</h2>
                                
                            </div>

                            <div class="products-slider owl-carousel owl-theme owl-nav-top">
                                <?php 
                                chdir(__DIR__);
                                include "../afficherDerniersHomme.php";
                                chdir(__DIR__);
                                 ?>
                            </div><!-- End .products-slider -->
                        </div><!-- End .half-content -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .no-gutters -->
            </div><!-- End .half-section -->

            <div class="half-section">
                <div class="row no-gutters">
                    <div class="col-md-6 half-img" style="background-image: url('assets/images/bg-2.jpg');">
                        <h2 class="half-title">Women's<br>Collection</h2>
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="half-content">
                            <div class="title-group">
                                <h2 class="subtitle">Nouvelle collection pour femme</h2>
                            </div>
                            <div class="products-slider owl-carousel owl-theme owl-nav-top">
                                <?php 
                                chdir(__DIR__);
                                include "../afficherDerniersFemme.php";
                                chdir(__DIR__);
                                 ?>
                            </div><!-- End .products-slider -->
                        </div><!-- End .half-content -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .no-gutters -->
            </div><!-- End .half-section -->


            <div class="half-section">
                <div class="row no-gutters">
                    <div class="col-md-6 order-md-last half-img" style="background-image: url('assets/images/bg-3.jpg');">
                        <h2 class="half-title">New<br>Accessories</h2>
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="half-content">
                            <div class="title-group">
                                <h2 class="subtitle">Nouveaux accesoires</h2>
                                
                            </div>

                            <div class="products-slider owl-carousel owl-theme owl-nav-top">
                                <?php 
                                chdir(__DIR__);
                                include "../afficherDerniersAccesoire.php";
                                chdir(__DIR__);
                                 ?>
                            </div><!-- End .products-slider -->
                        </div><!-- End .half-content -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .no-gutters -->
            </div><!-- End .half-section -->

        

        </main><!-- End .main -->
        <?php include "footer2.php";?>

    </div><!-- End .page-wrapper -->

    

    <a id="scroll-top" href="#top" title="Top" role="button"><i>UP</i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>

</html>
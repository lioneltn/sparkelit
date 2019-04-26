<?php
// Ouverture ou récupération de la session
session_start();
//echo "Hello";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Catalogue</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">
    
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <style type="text/css">
        .lienActive
        {
            background-color: #29363c;
            color:#fff;
            font-size: 15px;
            padding-left:5px;
            padding-right:5px;
            margin-left: 7px;
            margin-right: 7px;
            text-decoration: none;
           
        }
        .lien
        {
            padding-left:5px;
            padding-right:5px;
            font-size: 15px;
            margin-left: 7px;
            margin-right: 7px;
            text-decoration: none;
           
        }
        .lien:hover , .lienActive:hover
        {
             text-decoration: none;
             background-color: #29363c;
            color:#fff;

        }
    </style>
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
         <?php 
                            chdir(__DIR__);
                            include "header.php";
                            chdir(__DIR__);

                            ?>

        <main class="main">
            <div class="banner banner-cat" style="background-image: url('assets/images/banners/banner-top.jpg');">
                <div class="banner-content container">
                    <h3 class="banner-subtitle">check out over <strong>200+</strong></h3>
                    <h1 class="banner-title">INCREDIBLE deals</h1>

                    <a href="#" class="btn btn-primary" role="button">Shop Now</a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
            
            <br>
            <br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-xxl-10">
                        <nav class="toolbox">
                            <div class="toolbox-left">
                                <div class="toolbox-item toolbox-sort">
                                    <div class="select-custom">
                                        <select name="orderby" class="form-control" onchange="sortBy(this.value)">
                                            <option value="Default">Default</option>
                                            <option value="price-asc">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div><!-- End .select-custom -->

                                   
                                </div><!-- End .toolbox-item -->
                            </div><!-- End .toolbox-left -->

                            
                        </nav>
                        <?php
                            if (isset ($_GET['page']))
                            {
                                $_COOKIE['page']=$_GET['page'];
                            }
                            else
                            {
                                $_COOKIE['page']=1;
                            }
                            //echo $_COOKIE['page'];
                        ?>

                        <div id="product_sorted" class="row row-sm" style="width:1500px; ">
                            <?php 
                            chdir(__DIR__);
                            include "../afficherProduitfront.php";
                            chdir(__DIR__);

                            ?>
                        </div><!-- End .row -->
                            <?php 
                            chdir(__DIR__);
                            //echo "afficherpostfront.php?page=".$_GET['page'];
                            $nbproduit1=$produit1C->totalproduit();
                                $nbproduit=$nbproduit1['total'];
                               $lien=ceil($nbproduit/10);
                               $debut1=$debut+1;
                               $debut2=$debut+10;
                               if($nbproduit<$debut2)
                               {
                                $debut2=$nbproduit;
                               }
                   
                            ?>

                               <nav class="toolbox toolbox-pagination" style="width: 1500px;">
                                <div class="toolbox-item toolbox-show">
                                    <label><?php echo "Affichage de " . $debut1 ."-".$debut2 ." de ". $nbproduit ." resultats"?></label>
                                </div><!-- End .toolbox-item -->

                                <ul class="pagination">
                                <?php
                                    for($i=1;$i<=$lien;$i++)
                                    {
                                        if($_COOKIE['page']==$i)
                                        {
                                            echo "<li><a class='lienActive' style='background-color=black;color=white' href=category2.php?page=".$i.">".$i."</a></li>";
                                        }
                                        else
                                        {
                                            echo "<li><a class='lien' href=category.php?page=".$i.">".$i."</a></li>";
                                        }
                                        
                                    }
                                 ?>
                                </ul>
                            </nav>
                       
                    </div>


                </div>
            </div><!-- End .container-fluid -->

        </main><!-- End .main -->

        
    </div><!-- End .page-wrapper -->

    

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>

    <!-- Ajax JS File -->
    <script type="text/javascript" src="assets/js/ajax.js"></script>
</body>
</html>
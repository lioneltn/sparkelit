<?php
include "../../core/produitC.php";
chdir(__DIR__);
$ref=$_POST['ref'];
$produitC=new ProduitC();
$liste=$produitC->afficherProduitParRef($ref);
$i=$liste['thumbnail'];
$listedetails=$produitC->afficherDetailsParRef($ref);
$Colors = array("#FF0000"=>"Rouge", "#00CED1"=>"Bleu", "#FFFF00"=>"jaune" , "#32CD32"=>"Vert" , 
"#000000"=>"Noir");
$avaiblable_colors= array();

// Getting first color


$photos=array();



// Iterating through list detail to get all colors.
foreach($listedetails as $row)
{
   if (!(in_array($row['couleur'],$avaiblable_colors))){
        array_push($avaiblable_colors,$row['couleur']);

   }

}

// Iterating through list detail to get all photos.
foreach($listedetails as $row)
{
   if (!(in_array($row['image'],$photos))){
        array_push($photos,$row['image']);

   }

}

// Getting first size
$avaiblable_sizes= array();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $liste['nom'] ?> - 5icha</title>

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
     <?php 
                            chdir(__DIR__);
                            include "header.php";
                            chdir(__DIR__);

                            ?>

        <main class="main">
            <br>
            <br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-single-container product-single-default">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 product-single-gallery">
                                    <div class="product-slider-container product-item">
                                        <div class="product-single-carousel owl-carousel owl-theme">
                                            <div class="product-item">
                                                <img class="product-single-image" src="../<?php echo $i ?>" data-zoom-image="../<?php echo $i ?>"/>
                                            </div>
                                            <?php foreach($photos as $photo){

                                            
                                             ?>
                                            <div class="product-item">
                                                <img class="product-single-image" src="../<?php echo $photo ?>" data-zoom-image="../<?php echo $photo ?>"/>
                                            </div>
                                            <?php  
                                           }
                                           ?>
                                        </div>
                                        <!-- End .product-single-carousel -->
                                        <span class="prod-full-screen">
                                            <i class="icon-plus"></i>
                                        </span>
                                    </div>
                                      <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                        <div class="col-3 owl-dot">
                                            <img src="../<?php echo $i ?>"/>
                                        </div>
                                    <?php foreach($photos as $photo){ 
                                        ?>
                                        <div class="col-3 owl-dot">
                                            <img src="../<?php echo $photo ?>"/>
                                        </div>
                                       <?php
                                      }

                                    
                                      ?> 
                                      </div>
                                </div><!-- End .col-lg-7 -->

                                <div class="col-lg-5 col-md-6">
                                    <div class="product-single-details">
                                        <h1 class="product-title"><?php echo $liste['nom'];?></h1>

                                        <div class="ratings-container">
                                            

<!--                                             <a href="#" class="rating-link">( 6 Reviews )</a>
 -->                                        </div><!-- End .product-container -->

                                        <div class="price-box">
                                           
                                            <span class="product-price"><?php echo $liste['prix'] ?> DT</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-desc">
                                            <p style="width: 500px;overflow: hidden;word-wrap: break-word;"><?php echo $liste['description'] ?></p>
                                        </div><!-- End .product-desc -->
                                        <?php 
                                        if($liste['type']!='Accesoire'){
                                        ?>
                                        <div class="product-filters-container">
                                            <div class="product-single-filter">
                                                <label>Colors:</label>
                                                 <ul class="config-swatch-list">
                                                    <!-- /Populating product colors  -->
                                                    <?php
                                                    foreach($avaiblable_colors as $C){
                                                        $colors_code=array_search($C,$Colors);
                                                        ?> 


                                                    <li class="active">
                                                    

                                                       
                                                        <input hidden type="radio" id="color-<?php echo $C ?>" name="color-<?php echo $C ?>" value="<?php echo $C ?>">
                                                        <label for="color-<?php echo $C ?>" style="background-color: <?php echo $colors_code ?>;
                                                        width: 25px;color:transparent;" onclick="getSize('<?php echo $C; ?>','<?php echo $liste['reference'];?>');" color="red">

                                                           -   
                                                        </label>


                                                        
                                                    </li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
                                                <br>

                                                <label>Size:</label>
                                                <div id=size>
                                                    
                                                   
                                                </div>
                                            
                                            <?php
                                        }
                                        ?>

                                        <?php 
                                        if($liste['type']=='Accesoire'){
                                        ?>
                                        <div hidden class="product-filters-container">
                                            <div class="product-single-filter">
                                                <label>Colors:</label>
                                                 <ul class="config-swatch-list">
                                                    <!-- /Populating product colors  -->
                                                    <?php
                                                    foreach($avaiblable_colors as $C){
                                                        $colors_code=array_search($C,$Colors);
                                                        ?> 


                                                    <li class="active">
                                                    

                                                       
                                                        <input hidden type="radio" id="color-<?php echo $C ?>" name="color-<?php echo $C ?>" value="<?php echo $C ?>">
                                                        <label for="color-<?php echo $C ?>" style="background-color: <?php echo $colors_code ?>;
                                                        width: 25px;color:transparent;" onclick="getSize(<?php echo $C ?>,<?php echo $liste['reference']  ?>);" >

                                                           -   
                                                        </label>


                                                        
                                                    </li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
                                                <br>

                                                <label>Size:</label>
                                                <div id=size>
                                                    
                                                   
                                                </div>
                                            
                                            <?php
                                        }
                                        ?>
                                            </div><!-- End .product-single-filter -->
                                        </div><!-- End .product-filters-container -->

                                        <div class="product-action product-all-icons">
                                            <div class="product-single-qty">
                                                <input class="horizontal-quantity form-control" type="text">
                                            </div><!-- End .product-single-qty -->

                                            <form class="test" action="cart.php" method="POST">
                                            <input type="hidden" id="ref1" name="reference" value="<?php echo $liste['reference']?>">
                                            <button type="submit" class="paction add-cart" value="Add to Cart"><span>Ajouter au panier</span></button>
                                            </form>
                                           
                                           
                                            
                                        </div><!-- End .product-action -->

                                        
                                    </div><!-- End .product-single-details -->
                                </div><!-- End .col-lg-5 -->
                            </div><!-- End .row -->
                        </div><!-- End .product-single-container -->

                        
                    </div><!-- End .col-lg-9 -->

                    
                            
        </main><!-- End .main -->

        
    </div><!-- End .page-wrapper -->

    

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
    <!-- Ajax JS FILE -->
    <script type="text/javascript" src="assets/js/ajax.js"></script>

    <!-- www.addthis.com share plugin -->
    <script src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b927288a03dbde6"></script>
</body>
</html>
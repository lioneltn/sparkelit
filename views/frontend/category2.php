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
</head>
<body>
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

                        <div id=product_sorted class="row row-sm">
                            <?php 
                            chdir(__DIR__);
                            include "../afficherProduitfront.php";
                            chdir(__DIR__);

                            ?>
                        </div><!-- End .row -->

                       
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
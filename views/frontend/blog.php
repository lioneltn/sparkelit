<?php
chdir(__DIR__);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Blog</title>

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
        .rating{
            direction: rtl;
        }
      .rating  i{
        font-size: 40px;
        color: #303030;
        transition: 0.3s all;
        cursor: pointer;
      }  
       .rating i:hover 
       {
        color:#f1c40f;

       
       }
        .b1:hover~ i
        { 

            color:#f1c40f;
        }
          .b2:hover~ i
        { 

            color:#f1c40f;
        }
          .b3:hover~ i
        { 

            color:#f1c40f;
        }
          .b4:hover~ i
        { 

            color:#f1c40f;
        }
          .b5:hover~ i
        { 

            color:#f1c40f;
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-middle sticky-header">
                <div class="container-fluid">
                    <div class="header-left">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li><a href="index.php">Home</a></li>
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
                                                        <li><a href="category-banner-full-width.php">Fullwidth Banner<span class="tip tip-hot">Hot!</span></a></li>
                                                        <li><a href="category-banner-boxed-slider.php">Boxed Slider Banner</a></li>
                                                        <li><a href="category-banner-boxed-image.php">Boxed Image Banner</a></li>
                                                        <li><a href="category-sidebar-left.php">Left Sidebar</a></li>
                                                        <li><a href="category-sidebar-right.php">Right Sidebar</a></li>
                                                        <li><a href="category-flex-grid.php">Product Flex Grid</a></li>
                                                        <li><a href="category-horizontal-filter1.php">Horizontal Filter1</a></li>
                                                        <li><a href="category-horizontal-filter2.php">Horizontal Filter2</a></li>
                                                    </ul>
                                                </div><!-- End .col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="menu-title">
                                                        <a href="#">Variations 2</a>
                                                    </div>
                                                    <ul>
                                                        <li><a href="#">Product List Item Types</a></li>
                                                        <li><a href="category-infinite-scroll.php">Ajax Infinite Scroll</a></li>
                                                        <li><a href="category-3col.php">3 Columns Products</a></li>
                                                        <li><a href="category-4col.php">4 Columns Products <span class="tip tip-new">New</span></a></li>
                                                        <li><a href="category.php">5 Columns Products</a></li>
                                                        <li><a href="category-6col.php">6 Columns Products</a></li>
                                                        <li><a href="category-7col.php">7 Columns Products</a></li>
                                                        <li><a href="category-8col.php">8 Columns Products</a></li>
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
                                    <a href="product.php" class="sf-with-ul">Products</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="menu-title">
                                                            <a href="#">Variations</a>
                                                        </div>
                                                        <ul>
                                                            <li><a href="product.php">Horizontal Thumbnails</a></li>
                                                            <li><a href="product-full-width.php">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                                            <li><a href="product.php">Inner Zoom</a></li>
                                                            <li><a href="product-addcart-sticky.php">Addtocart Sticky</a></li>
                                                            <li><a href="product-sidebar-left.php">Accordion Tabs</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="menu-title">
                                                            <a href="#">Variations</a>
                                                        </div>
                                                        <ul>
                                                            <li><a href="product-sticky-tab.php">Sticky Tabs</a></li>
                                                            <li><a href="product-simple.php">Simple Product</a></li>
                                                            <li><a href="product-sidebar-left.php">With Left Sidebar</a></li>
                                                        </ul>
                                                    </div><!-- End .col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="menu-title">
                                                            <a href="#">Product Layout Types</a>
                                                        </div>
                                                        <ul>
                                                            <li><a href="product.php">Default Layout</a></li>
                                                            <li><a href="product-extended-layout.php">Extended Layout</a></li>
                                                            <li><a href="product-full-width.php">Full Width Layout</a></li>
                                                            <li><a href="product-grid-layout.php">Grid Images Layout</a></li>
                                                            <li><a href="product-sticky-both.php">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                                            <li><a href="product-sticky-info.php">Sticky Right Side Info</a></li>
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
                                        <li><a href="cart.php">Shopping Cart</a></li>
                                        <li><a href="#">Checkout</a>
                                            <ul>
                                                <li><a href="checkout-shipping.php">Checkout Shipping</a></li>
                                                <li><a href="checkout-shipping-2.php">Checkout Shipping 2</a></li>
                                                <li><a href="checkout-review.php">Checkout Review</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Dashboard</a>
                                            <ul>
                                                <li><a href="dashboard.php">Dashboard</a></li>
                                                <li><a href="my-account.php">My Account</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="single.php">Blog Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li><a href="#" class="login-link">Login</a></li>
                                        <li><a href="forgot-password.php">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="sf-with-ul">Features</a>
                                    <ul>
                                        <li><a href="#">Header Types</a></li>
                                        <li><a href="#">Footer Types</a></li>
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
                                <a href="#">Links</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="my-account.php">MY ACCOUNT </a></li>
                                        <li><a href="#">DAILY DEAL</a></li>
                                        <li><a href="#">MY WISHLIST </a></li>
                                        <li><a href="blog.php">BLOG</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="#" class="login-link">LOG IN</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropown -->
                        </div><!-- End .header-dropdowns -->

                        <div class="header-contact">
                            <a href="tel:#">+000 1584 2578</a>
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
                <div class="container-fluid ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </div><!-- End .container-fluid  -->
            </nav>

            <div class="container">
                <select class="form-control" onchange="triepost(this.value)">
                    <option value="" selected="selected"></option>
                    <option value="Popularite">Popularite Decroissante</option>
                    <option value="Date">Date Decroissante</option>
                    <option value="PopulariteC">Popularite Croissante</option>
                    <option value="DateC">Date Croissante</option>
                </select>
                <input  class="form-control" placeholder="titre" type="text" name="recherchetitre" id="recherchetitre" onkeyup="recherchetitre(this.value)">

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

                <div class="row" id="contenu">
                    <!--<div class="col-lg-9">-->
                        <?php 
                        include "../afficherpostfront.php";
                        chdir(__DIR__);
                        ?>

                        
                     

                       
                    <!--</div>--><!-- End .col-lg-9 -->

                   
                </div><!-- End .row -->

                <?php 
                chdir(__DIR__);
                //echo "afficherpostfront.php?page=".$_GET['page'];
                $nbpost1=$poste1C->totalpost();
                    $nbpost=$nbpost1['total'];
                   $lien=ceil($nbpost/10);
                   $debut1=$debut+1;
                   $debut2=$debut+10;
                   if($nbpost<$debut2)
                   {
                    $debut2=$nbpost;
                   }
                   
                   ?>

                   <nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">
                        <label><?php echo "Affichage de " . $debut1 ."-".$debut2 ." de ". $nbpost ." resultats"?></label>
                    </div><!-- End .toolbox-item -->

                    <ul class="pagination">
                    <?php
                        for($i=1;$i<=$lien;$i++)
                        {
                            if($_COOKIE['page']==$i)
                            {
                                echo "<li><a class='lienActive' style='background-color=black;color=white' href=blog.php?page=".$i.">".$i."</a></li>";
                            }
                            else
                            {
                                echo "<li><a class='lien' href=blog.php?page=".$i.">".$i."</a></li>";
                            }
                            
                        }
                     ?>
                    </ul>
                </nav>
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
                                <h4 class="widget-title">Contact Info</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Address:</span>123 Street Name, City, England
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Phone:</span>Toll Free <a href="tel:">(123) 456-7890</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
                                    </li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="widget">
                                        <h4 class="widget-title">My Account</h4>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="about.php">About Us</a></li>
                                                    <li><a href="contact.php">Contact Us</a></li>
                                                    <li><a href="my-account.php">My Account</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="#">Orders History</a></li>
                                                    <li><a href="#">Advanced Search</a></li>
                                                    <li><a href="#" class="login-link">Login</a></li>
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
                                                    <li><a href="#">Powerful Admin Panel</a></li>
                                                    <li><a href="#">Mobile & Retina Optimized</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-5 -->

                                <div class="col-lg-3">
                                    <div class="widget">
                                        <h4 class="widget-title">Working Days/Hours</h4>
                                        <ul class="contact-info">
                                            <li>
                                                Mon - Sun / 9:00AM - 8:00PM
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

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
    <script type="text/javascript">
        
        function note1(id)
        {
            var id_post=id.substring(id.indexOf("_")+1,id.length);
            document.getElementById('noteposte_'+id_post).value=1;
            document.getElementById('noteposte_'+id_post).onchange();

           
        }
        function note2(id)
        {
            var id_post=id.substring(id.indexOf("_")+1,id.length);
            document.getElementById('noteposte_'+id_post).value=2;
            document.getElementById('noteposte_'+id_post).onchange();
           
        }
        function note3(id)
        {
            var id_post=id.substring(id.indexOf("_")+1,id.length);
            document.getElementById('noteposte_'+id_post).value=3;
            document.getElementById('noteposte_'+id_post).onchange();
            
        }
        function note4(id)
        {
            var id_post=id.substring(id.indexOf("_")+1,id.length);
            document.getElementById('noteposte_'+id_post).value=4;
            document.getElementById('noteposte_'+id_post).onchange();
          
        }
        function note5(id)
        {
            var id_post=id.substring(id.indexOf("_")+1,id.length);
            document.getElementById('noteposte_'+id_post).value=5;
            document.getElementById('noteposte_'+id_post).onchange();
            
        }


        function notechange(id)
        {
             var id_post=id.substring(id.indexOf("_")+1,id.length);
            var x=document.getElementById(id);
            var b1=document.getElementById("b1_"+id_post);
            var b2=document.getElementById("b2_"+id_post);
            var b3=document.getElementById("b3_"+id_post);
            var b4=document.getElementById("b4_"+id_post);
            var b5=document.getElementById("b5_"+id_post);
           if (x.value==1)
            {
                b5.style.color='#f1c40f';
                b4.style.color='#303030';
                b3.style.color='#303030';
                b2.style.color='#303030';
                b1.style.color='#303030';
            }
            if (x.value=="2")
            {
                b5.style.color='#f1c40f';
                b4.style.color='#f1c40f';
                b3.style.color='#303030';
                b2.style.color='#303030';
                b1.style.color='#303030';
            }
            if (x.value=="3")
            {
                b5.style.color='#f1c40f';
                b4.style.color='#f1c40f';
                b3.style.color='#f1c40f';
                b2.style.color='#303030';
                b1.style.color='#303030';
            }
            if (x.value=="4")
            {
                b5.style.color='#f1c40f';
                b4.style.color='#f1c40f';
                b3.style.color='#f1c40f';
                b2.style.color='#f1c40f';
                b1.style.color='#303030';
            }
            if (x.value=="5")
            {
                b5.style.color='#f1c40f';
                b4.style.color='#f1c40f';
                b3.style.color='#f1c40f';
                b2.style.color='#f1c40f';
                b1.style.color='#f1c40f';
            }



        }

        function triepost(str)
        {
            document.getElementById("recherchetitre").value="";
            if(str=="")
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../afficherpostfront.php",true);
                xmlhttp.send();
            }
            if(str=="Date")
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../afficherpostfrontTrieDateDesc.php",true);
                xmlhttp.send();
            }
            if(str=="Popularite")
            {
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../afficherpostfrontTrieNoteDesc.php",true);
                xmlhttp.send();
            }

            if(str=="DateC")
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../afficherpostfrontTrieDateASC.php",true);
                xmlhttp.send();
            }
            if(str=="PopulariteC")
            {
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../afficherpostfrontTrieNoteASC.php",true);
                xmlhttp.send();
            }
        }

        function recherchetitre(str)
        {
            
            if(str=="")
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../afficherpostfront.php",true);
                xmlhttp.send();
            }
            else
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","../recherchepostepartitrefront.php?recherche="+str,true);
                xmlhttp.send();
            }
        }
    </script>
   

</body>
</html>
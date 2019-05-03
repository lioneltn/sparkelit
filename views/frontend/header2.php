<header class="header">
            <div class="header-middle sticky-header">
                <div class="container-fluid">
                    <div class="header-left">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li><a href="index.php">Home</a></li>
                                <li>
                                    <a href="category.php" >Catalogue</a>
                                    
                                </li>
                                 <li><a href="blog.php">BLOG</a></li>
                               
                            </ul>
                        </nav>
                    </div>

                    <div class="header-center">
                        <a href="index.php" class="logo">
                            <img src="assets/images/Logoreduit.png" alt="Porto Logo" style="width: 92px;height: 49px">
                        </a>
                    </div>

                    <div class="header-right">
                       

                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        
                        <div class="header-dropdowns">
                            

                            <div class="header-dropdown">
                            <a href="#"><?PHP if(isset($_SESSION['email'])) echo "Salut ".$prenom; else echo "liens" ?></a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="my-account.php">Mon compte </a></li>
                                       
                                        <li><a href="login.php"><?PHP if(isset($_SESSION['email'])){ echo "se déconnecter";} else {echo  "se connecter";} ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="header-contact">
                            <a href="tel:#">20.457.000</a>
                        </div>

                    </div>
                </div>
            </div>
        </header>
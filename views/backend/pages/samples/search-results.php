<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CloudUi Premium Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.php -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
            <div class="nav-top flex-grow-1">
                <div class="container d-flex flex-row h-100 align-items-center">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                        <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../images/Logoreduit.png" alt="logo" /></a>
                        <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/logo-mini.svg" alt="logo" /></a>
                    </div>
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">
                        <!--<form class="search-field d-none d-md-flex" action="#">
                            <div class="form-group mb-0">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="search here...">
                                </div>
                            </div>
                        </form>-->
                        <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                    <img src="https://via.placeholder.com/39x39" alt="profile" />
                                    <span class="nav-profile-name">
                                        <?PHP echo $nom . "  " . $prenom ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                    <a class="dropdown-item" href = "profile.php">
                                        <i class="icon-settings text-primary mr-2"></i>
                                        Profil
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="login.php">
                                        <i class="icon-logout text-primary mr-2"></i>
                                        Se déconnecter
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                            <span class="icon-menu text-dark"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="nav-bottom">
                <div class="container">
                    <ul class="nav page-navigation">
                        <li class="nav-item">
                            <a href="../../index.php" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Tableau de bord</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="../Ajouterproduit.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Produits</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="../Ajouterproduit.php"> Ajouter produit</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../afficherProduits.php">Afficher produits</a></li>
                                </ul>
                            </div>
                        </li>




                        <li class="nav-item">
                            <a href="../ajoutercategorie.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Categorie</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="../ajoutercategorie.php"> Ajouter Categorie</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../afficherCategorie.php">Afficher Categorie</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="../forms/formulaire_ajouter_poste.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Post</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="../forms/formulaire_ajouter_poste.php"> Ajouter post</a></li>

                                    <li class="nav-item"><a class="nav-link" href="../forms/afficherpostadmin.php">Afficher posts</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="../ajouterfournisseur.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Fournisseur</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="../ajouterfournisseur.php"> Ajouter fournisseur</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../afficherFournisseur">Afficher fournisseurs</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="../ajouterfournisseur.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Commandes</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="../samples/orders.php"> commandes</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../samples/statistiques.php">statistiques des ventes</a></li>
                                </ul>
                            </div>
                        </li>
<li class="nav-item">
              <a href="../ajouterOffre.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Offre</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../ajouterOffre.php"> Ajouter offre</a></li>
                  <li class="nav-item"><a class="nav-link" href="../afficherOffres.php">Afficher offre</a></li>
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
                </ul>
              </div>
            </li> 
             
            <li class="nav-item">
              <a href="../ajouterMetadonnee.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Metadonnee</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../ajouterMetadonnee.php"> Ajouter metadonnee</a></li>
                  <li class="nav-item"><a class="nav-link" href="../afficherMetadonnee.php">Afficher metadonnee</a></li>
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
                </ul>
              </div>
            </li>



                    </ul>
                </div>
            </div>
        </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <form action="#">
                        <div class="form-group d-flex">
                          <input type="text" class="form-control" placeholder="Search Here" value="urbanui">
                          <button type="submit" class="btn btn-primary ml-3">Search</button>
                        </div>
                      </form>
                    </div>
                    <div class="col-12 mb-5">
                      <h2>Search Result For<u class="ml-2">"urbanui"</u></h2>
                      <p class="text-muted">About 12,100 results (0.52 seconds)</p>
                    </div>
                    <div class="col-12 results">
                      <div class="pt-4 border-bottom">
                        <a class="d-block h4 mb-0" href="#">urbanui</a>
                        <a class="page-url text-primary" href="#">https://www.urbanui.com/</a>
                        <p class="page-description mt-1 w-75 text-muted">urbanui gives you the most beautiful, free and premium bootstrap admin dashboard templates and control panel themes based on Bootstrap 3 and 4.</p>
                      </div>
                    </div>
                    <div class="col-12 results">
                      <div class="pt-4 border-bottom">
                        <a class="d-block h4 mb-0" href="#">urbanui Team – Medium</a>
                        <a class="page-url text-primary" href="#">https://medium.com/@urbanui</a>
                        <p class="page-description mt-1 w-75 text-muted">Read writing from urbanui Team on Medium. We design and develop awesome admin dashboard templates with Bootstrap, so you can kick-start and speed up your development. www.urbanui.com.</p>
                      </div>
                    </div>
                    <div class="col-12 results">
                      <div class="pt-4 border-bottom">
                        <a class="d-block h4 mb-0" href="#">urbanui · GitHub</a>
                        <a class="page-url text-primary" href="#">https://github.com/urbanui</a>
                        <p class="page-description mt-1 w-75 text-muted">urbanui has 1 repository available. Follow their code on GitHub.</p>
                      </div>
                    </div>
                    <div class="col-12 results">
                      <div class="pt-4 border-bottom">
                        <a class="d-block h4 mb-0" href="#">urbanui.com - Home | Facebook</a>
                        <a class="page-url text-primary" href="#">https://www.facebook.com/urbanui</a>
                        <p class="page-description mt-1 w-75 text-muted">urbanui.com. 9 likes · 4 talking about this. Clean, customisable admin dashboard template themes / UI WebApp Kits with a huge collection of...</p>
                      </div>
                    </div>
                    <div class="col-12 results">
                      <div class="pt-4 border-bottom">
                        <a class="d-block h4 mb-0" href="#">urbanui Team – Hacker Noon</a>
                        <a class="page-url text-primary" href="#">https://hackernoon.com/@urbanui</a>
                        <p class="page-description mt-1 w-75 text-muted">Oct 9, 2017 - Read writing from urbanui Team in Hacker Noon. We design and develop awesome admin dashboard templates with Bootstrap, so you can kick-start and speed up your development. www.urbanui.com.</p>
                      </div>
                    </div>
                    <div class="col-12 results">
                      <div class="pt-4 border-bottom">
                        <a class="d-block h4 mb-0" href="#">urbanui | Crunchbase</a>
                        <a class="page-url text-primary" href="#">https://www.crunchbase.com/organization/urbanui</a>
                        <p class="page-description mt-1 w-75 text-muted">urbanui creates quality admin templates that are based on Bootstrap, the most popular front end development framework.</p>
                      </div>
                    </div>
                    <div class="col-12 results">
                      <div class="pt-4 border-bottom">
                        <a class="d-block h4 mb-0" href="#">urbanui.com (@urbanui) | Twitter</a>
                        <a class="page-url text-primary" href="#">https://twitter.com/@urbanui</a>
                        <p class="page-description mt-1 w-75 text-muted">The latest Tweets from urbanui.com (@urbanui). Clean, customisable admin dashboard template themes / UI WebApp Kits with a huge collection of pre-built widgets and plugins.</p>
                      </div>
                    </div>
                    <div class="col-12 results">
                      <div class="pt-4 border-bottom">
                        <a class="d-block h4 mb-0" href="#">Urbanui on Behance</a>
                        <a class="page-url text-primary" href="#">https://www.behance.net/urbanui</a>
                        <p class="page-description mt-1 w-75 text-muted">Awesome Bootstrap Admin Dashboard Templates. For Faster, Easier Web Applications Development. Clean, customizable admin dashboard template theme / UI WebApp Kit with a huge collection of pre-built widgets and plugins. Design and build modern, robust, user-friendly web applications real fast!</p>
                      </div>
                    </div>
                    <nav class="col-12" aria-label="Page navigation">
                      <ul class="pagination mt-5">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item  active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.php -->
        <footer class="footer">
          <div class="w-100 clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>

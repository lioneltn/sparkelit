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
   <link rel="stylesheet" href="../../vendors/summernote/dist/summernote-bs4.css">
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
                                    <a class="dropdown-item" href = "../samples/profile.php">
                                        <i class="icon-settings text-primary mr-2"></i>
                                        Profil
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../samples/login.php">
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
                            <a href="formulaire_ajouter_poste.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Post</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="formulaire_ajouter_poste.php"> Ajouter post</a></li>

                                    <li class="nav-item"><a class="nav-link" href="afficherpostadmin.php">Afficher posts</a></li>
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
          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">summernote Editor</h4>
                  <div id="summernoteExample">
                    <h4>The standard Lorem Ipsum passage, used since the 1500s</h4>
                    <img src="https://via.placeholder.com/256x256" class="ml-2 mb-2 w-25" alt="sample image">
                    <p class="text-justify">
                      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                    <p class="text-justify">
                      "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                      veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                      magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tinymce Editor</h4>
                  <textarea id='tinyMceExample'>
                    Edit your content here...
                  </textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Quill Editor</h4>
                  <div id="quillExample1" class="quill-container">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Simplemde Editor</h4>
                  <textarea id="simpleMde">
                  </textarea>
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
  <script src="../../vendors/tinymce/tinymce.min.js"></script>
  <script src="../../vendors/tinymce/themes/modern/theme.js"></script>
  <script src="../../vendors/summernote/dist/summernote-bs4.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/editorDemo.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

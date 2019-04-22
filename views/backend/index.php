<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>5icha</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <?PHP
  include "../../entities/comptes/admin.php";
  include "../../core/comptes/adminC.php";

  if (isset($_SESSION['email_admin'])) {
    $adminC = new AdminC();
    $result = $adminC->recupererAdmin($_SESSION['email_admin']);
    foreach ($result as $row) {
      $nom = $row['nom'];
      $prenom = $row['prenom'];
      $datenaissance = $row['datenaissance'];
      $sexe = $row['sexe'];
      $password = $row['motdepasse'];
    }
  } else {
    header('Location: pages/samples/login.php');
  }
  ?>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.php -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
            <div class="nav-top flex-grow-1">
                <div class="container d-flex flex-row h-100 align-items-center">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                        <a class="navbar-brand brand-logo" href="index.php"><img src="images/Logoreduit.png" alt="logo" /></a>
                        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo" /></a>
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
                            <!--<li class="nav-item dropdown">
                                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                    <i class="icon-envelope mx-0"></i>
                                    <span class="count"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                    <div class="dropdown-item">
                                        <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                                        </p>
                                        <span class="badge badge-info badge-pill float-right">View all</span>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow">
                                            <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                                                <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                                            </h6>
                                            <p class="font-weight-light small-text">
                                                The meeting is cancelled
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow">
                                            <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                                                <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                                            </h6>
                                            <p class="font-weight-light small-text">
                                                New product launch
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow">
                                            <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                                                <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                                            </h6>
                                            <p class="font-weight-light small-text">
                                                Upcoming board meeting
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                                    <i class="icon-bell"></i>
                                    <span class="count"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                    <a class="dropdown-item py-3">
                                        <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
                                        </p>
                                        <span class="badge badge-pill badge-info float-right">View all</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-success">
                                                <i class="icon-exclamation mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                                            <p class="font-weight-light small-text mb-0">
                                                Just now
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-warning">
                                                <i class="icon-bubble mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                                            <p class="font-weight-light small-text mb-0">
                                                Private message
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-info">
                                                <i class="icon-user-following mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                                            <p class="font-weight-light small-text mb-0">
                                                2 days ago
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </li>-->
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                    <img src="https://via.placeholder.com/39x39" alt="profile" />
                                    <span class="nav-profile-name">
                                        <?PHP echo $nom . "  " . $prenom ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                    <a class="dropdown-item" href = "pages/samples/profile.php">
                                        <i class="icon-settings text-primary mr-2"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages/samples/login.php">
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
                            <a href="index.php" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Dashboard</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/Ajouterproduit.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Produits</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="pages/Ajouterproduit.php"> Ajouter produit</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/afficherProduits.php">Afficher produits</a></li>
                                </ul>
                            </div>
                        </li>




                        <li class="nav-item">
                            <a href="pages/ajoutercategorie.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Categorie</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="pages/ajoutercategorie.php"> Ajouter Categorie</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/afficherCategorie.php">Afficher Categorie</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="pages/forms/formulaire_ajouter_poste.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Post</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="pages/forms/formulaire_ajouter_poste.php"> Ajouter post</a></li>

                                    <li class="nav-item"><a class="nav-link" href="pages/forms/afficherpostadmin.php">Afficher posts</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="pages/ajouterfournisseur.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Fournisseur</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="pages/ajouterfournisseur.php"> Ajouter fournisseur</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/afficherFournisseur">Afficher fournisseurs</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="pages/ajouterfournisseur.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Commandes</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="pages/samples/orders.php"> commandes</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/samples/statistiques.php">statistiques des ventes</a></li>
                                </ul>
                            </div>
                        </li>
<li class="nav-item">
              <a href="pages/ajouterOffre.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Offre</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/ajouterOffre.php"> Ajouter offre</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/afficherOffres.php">Afficher offre</a></li>
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
                </ul>
              </div>
            </li> 
             
            <li class="nav-item">
              <a href="pages/ajouterMetadonnee.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Metadonnee</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/ajouterMetadonnee.php"> Ajouter metadonnee</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/afficherMetadonnee.php">Afficher metadonnee</a></li>
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
                        <div class="col-12 grid-margin">
                        <div class="card card-statistics">
                                <div class="card-body p-0">
                                    <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                            <div class="d-flex justify-content-between border-right card-statistics-item">
                                                <div>
  <h1> Bonjour</h1>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</div>
</div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card card-statistics">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex justify-content-between border-right card-statistics-item">
                                                <div>
                                                    <h1>28893</h1>
                                                    <p class="text-muted mb-0">Total invoices</p>
                                                </div>
                                                <i class="icon-layers text-primary icon-lg"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex justify-content-between border-right card-statistics-item">
                                                <div>
                                                    <?PHP
                                                    $sql = "select count(email) as nbre from utilisateur";
                                                    $db = config::getConnexion();
                                                    try {
                                                        $req = $db->prepare($sql);

                                                        $req->execute();
                                                    } catch (Exception $e) {
                                                        echo 'Erreur: ' . $e->getMessage();
                                                    }
                                                    foreach ($req as $row) {
                                                        $nbre = $row['nbre'];
                                                    }
                                                    ?>
                                                    <h1>
                                                        <?PHP echo $nbre ?>
                                                    </h1>
                                                    <p class="text-muted mb-0">New users</p>
                                                </div>
                                                <a href="pages/samples/utilisateurs.php"><i class="icon-people text-primary icon-lg"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex justify-content-between border-right card-statistics-item">
                                                <div>
                                                    <?PHP
                                                        $sql = "select count(login) as nbre from client";
                                                        $db = config::getConnexion();
                                                        try {
                                                            $req = $db->prepare($sql);

                                                            $req->execute();
                                                        } catch (Exception $e) {
                                                            echo 'Erreur: ' . $e->getMessage();
                                                        }
                                                        foreach ($req as $row) {
                                                            $nbre = $row['nbre'];
                                                        }
                                                        ?>
                                                    <h1>
                                                        <?PHP echo $nbre ?>
                                                    </h1>
                                                    <p class="text-muted mb-0">New clients</p>
                                                </div>
                                                <a href="pages/samples/clients.php"><i class="icon-people text-primary icon-lg"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex justify-content-between border-right card-statistics-item">
                                                <div>
                                                    <?PHP
                                                        $sql = "select count(login) as nbre from admin where type = :type";
                                                        $db = config::getConnexion();
                                                        try {
                                                            $req = $db->prepare($sql);
                                                            $req->bindValue(':type', 1);
                                                            $req->execute();
                                                        } catch (Exception $e) {
                                                            echo 'Erreur: ' . $e->getMessage();
                                                        }
                                                        foreach ($req as $row) {
                                                            $nbre = $row['nbre'];
                                                        }
                                                        ?>
                                                    <h1>
                                                        <?PHP echo $nbre ?>
                                                    </h1>
                                                    <p class="text-muted mb-0">New admins</p>
                                                </div>
                                                <a href="pages/samples/admins"><i class="icon-people text-primary icon-lg"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex justify-content-between border-right card-statistics-item">
                                                <div>
                                                    <?PHP
                                                        $sql = "select count(login) as nbre from admin where type = :type";
                                                        $db = config::getConnexion();
                                                        try {
                                                            $req = $db->prepare($sql);
                                                            $req->bindValue(':type', 2);
                                                            $req->execute();
                                                        } catch (Exception $e) {
                                                            echo 'Erreur: ' . $e->getMessage();
                                                        }
                                                        foreach ($req as $row) {
                                                            $nbre = $row['nbre'];
                                                        }
                                                        ?>
                                                    <h1>
                                                        <?PHP echo $nbre ?>
                                                    </h1>
                                                    <p class="text-muted mb-0">New artistes</p>
                                                </div>
                                                <a href="pages/samples/artistes.php"><i class="icon-people text-primary icon-lg"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex justify-content-between border-right card-statistics-item">
                                                <div>
                                                    <h1>6875</h1>
                                                    <p class="text-muted mb-0">Unique visits</p>
                                                </div>
                                                <i class="icon-pin text-primary icon-lg"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex justify-content-between card-statistics-item">
                                                <div>
                                                    <h1>45596</h1>
                                                    <p class="text-muted mb-0">Sales</p>
                                                </div>
                                                <i class="icon-refresh text-primary icon-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              
                        
              
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.php -->
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/form-addons.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
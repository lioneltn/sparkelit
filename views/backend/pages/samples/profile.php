<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Profile</title>
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
  <link rel="shortcut icon" href="../../images/logoreduit.png" />
</head>

<body>
  <?PHP
  include "../../../../entities/comptes/admin.php";
  include "../../../../core/comptes/adminC.php";

 
  if (isset($_SESSION['email_admin'])) {
    $adminC = new AdminC();
    $result = $adminC->recupererAdmin($_SESSION['email_admin']);
    foreach ($result as $row) {
      $nom = $row['nom'];
      $prenom = $row['prenom'];
      $datenaissance = $row['datenaissance'];
      $sexe = $row['sexe'];
      $password = $row['motdepasse'];
      $type = $row['type'];
      if($type != 1) {
        header('Location: login.php');
      }
      $listecomptes = $adminC->listeComptes();
      $listecomptesclient = $adminC->listeComptesClient();
    }
  } else {
    header('Location: login.php');
  }
  ?>
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
                                    <li class="nav-item"><a class="nav-link" href="../forms/statpost.php">Statistiques posts</a></li>
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
                            <a href="../region-chart.php" class="nav-link"><i class="link-icon icon-pie-chart"></i><span class="menu-title">Stats</span></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="../region-chart.php"> Statistiques visites par région</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../device-chart.php">Statistiques visites par appareils</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../browser-chart.php">Statistiques visites par navigateurs</a></li>
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
          <div class="row profile-page">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="profile-body">
                    <ul class="nav tab-switch" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="user-profile-info-tab" data-toggle="pill" href="#user-profile-info" role="tab" aria-controls="user-profile-info" aria-selected="true">Profile</a>
                      </li>
                     <li class="nav-item">
                        <a class="nav-link" id="user-profile-activity-tab" data-toggle="pill" href="#user-profile-activity" role="tab" aria-controls="user-profile-activity" aria-selected="false">Historique</a>
                      </li>
                    </ul>
                    <div class="row">
                      <div class="col-md-9">
                        <div class="tab-content tab-body" id="profile-log-switch">
                          <div class="tab-pane fade show active pr-3" id="user-profile-info" role="tabpanel" aria-labelledby="user-profile-info-tab">


                            <div class="card">
                              <div class="card-header">
                                Contact Information
                                <a href="../forms/modify_account_admin.php" class="card-edit">Edit</a>
                              </div><!-- End .card-header -->

                              <div class="card-body">
                                <p>
                                  <?PHP echo $nom . "  " . $prenom ?><br>
                                  <?PHP echo $_SESSION['email_admin'] ?><br>
                                  <a href="../forms/new_password">Change Password</a>
                                </p>
                              </div><!-- End .card-body -->
                            </div><!-- End .card -->
                            <div class="card">
                              <div class="card-header">
                                Autres informations
                                <a href="../forms/modify_account_admin.php" class="card-edit">Edit</a>
                              </div><!-- End .card-header -->

                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <h4 class="">Date de naissance</h4>
                                    <address>
                                      <?PHP echo $datenaissance ?><br>
                                      <a href="../forms/modify_account_admin.php">Edit </a>
                                    </address>
                                  </div>

                                </div>
                              </div><!-- End .card-body -->
                            </div><!-- End .card -->
                          </div>
                          <div class="tab-pane fade" id="user-profile-activity" role="tabpanel" aria-labelledby="user-profile-activity-tab">
                            <div class="horizontal-timeline">
                            <i>Les 5 derniers comptes admin & artiste ajoutés : </i>
                              <br><br>
                              <table border = "1">
                                <tr>
                                  <td><b>Email</b> </td>
                                  <td><b>Nom </b></td>
                                  <td><b>Prénom</b> </td>
                                  <td><b>Date de naissance </b></td>
                                  <td><b>Date d'ajout du compte </b></td>
                                  <td><b>Sexe</b> </td>
                                  <td><b>Type</b> </td>
                                </tr>
                                <?PHP
                                  foreach($listecomptes as $row){
                                    ?>
                                <tr>
                                  <td><?PHP echo $row['email'] ?></td>
                                  <td><?PHP echo $row['nom'] ?></td>
                                  <td><?PHP echo $row['prenom'] ?></td>
                                  <td><?PHP echo $row['datenaissance'] ?></td>
                                  <td><?PHP echo $row['dateAjout'] ?></td>
                                  <td><?PHP echo $row['sexe'] ?></td>
                                  <td><?PHP if ($row['type'] == 1) echo "admin"; else if ($row['type'] == 2) echo "artiste"; else echo "client"; ?></td>
                                </tr>
                                <?PHP } ?>
                              </table>
                              <br>
                              <i>Les 5 derniers comptes client ajoutés : </i>
                              <br><br>
                              <table border = "1">
                                <tr>
                                  <td><b>Email</b> </td>
                                  <td><b>Nom </b></td>
                                  <td><b>Prénom</b> </td>
                                  <td><b>Date de naissance </b></td>
                                  <td><b>Date d'ajout du compte </b></td>
                                  <td><b>Sexe</b> </td>
                                  <td><b>Type</b> </td>
                                </tr>
                                <?PHP
                                  foreach($listecomptesclient as $row){
                                    ?>
                                <tr>
                                  <td><?PHP echo $row['email'] ?></td>
                                  <td><?PHP echo $row['nom'] ?></td>
                                  <td><?PHP echo $row['prenom'] ?></td>
                                  <td><?PHP echo $row['datenaissance'] ?></td>
                                  <td><?PHP echo $row['dateAjout'] ?></td>
                                  <td><?PHP echo $row['sexe'] ?></td>
                                  <td><?PHP echo "client"; ?></td>
                                </tr>
                                <?PHP } ?>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
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
  <script src="../../js/form-addons.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
<?php 
session_start();
include "../../../../core/notecore.php";
chdir(__DIR__);
include "../../../../core/postecore.php";
chdir(__DIR__);
$noteC= new noteC();
$posteC= new posteC();
$listeposte=$posteC->id_poste_total();
$nbsansnote=0;
$nbsanscommantaire=0;
$nbaveccommantaire=0;
foreach ($listeposte as $row) 
{
  $nbcommantaire1=$noteC->nombrecommantaire($row['id_poste']);
  $nbcommantaire=$nbcommantaire1['total'];
  if($nbcommantaire==0)
  {
    $nbsanscommantaire++;
  }
  else
  {
    $nbaveccommantaire++;
  }
}
$nbsansnote1=$posteC->stat_sans_note();
$nbsansnote=$nbsansnote1['totaln'];


$_COOKIE['nbsansnote']=$nbsansnote;
$_COOKIE['nbsanscommantaire']=$nbsanscommantaire;
$_COOKIE['nbaveccommantaire']=$nbaveccommantaire;

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
  <link rel="stylesheet" type="text/css" href="Formulaire.css">


  <link rel="stylesheet" href="../../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
      function drawChart() {
        var nbsansnote=<?php echo $nbsansnote ;?>;
        var nbaveccommantaire=<?php echo $nbaveccommantaire ;?>;
        var nbsanscommantaire=<?php echo $nbsanscommantaire ;?>;
        
        var data = google.visualization.arrayToDataTable([
          ['Post', 'Nombre'],
          ['Postes sans note ni commantaires',     nbsansnote],
          ['Poste avec note sans commantaire',      nbsanscommantaire],
          ['Poste avec note et commantaires',  nbaveccommantaire]
        ]);

        var options = {
          title: 'Statistiques sur les postes'
        };

        var chart = new google.visualization.PieChart(document.getElementById('contenu'));

        chart.draw(data, options);
      }
    </script>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/logoreduit.png" />
  <style type="text/css">


</style>
  <title>Stat Poste</title>
</head>
<body>
  <?PHP
chdir(__DIR__);

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
    
    }
  } else {
    header('Location: ../samples/login.php');
  }
  chdir(__DIR__);

  ?>

  <div class="container-scroller">
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
                      <?php if($type==1)
                        {?>
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

                                    <li class="nav-item"><a class="nav-link" href="statpost.php">Statistiques posts</a></li>
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
            <?php
            }
            else
            {
              ?>

              <li class="nav-item">
              <a href="../samples/dashboard-artiste.php" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Tableau de bord</span></a>
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

            <?php

            }  

            ?>


                    </ul>
                </div>
            </div>
        </nav>

    <!-- partial -->
  <div class="card">
     


              <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row" id="contenu" style="margin-left:350px;width: 700px;height: 500px;">
                   
                    
               
                  </div>
                 
                  <form action="../../../ajoutstatposte.php" method="POST">
                 
                    <input type="hidden" name="1" value="<?php echo $nbsansnote;?>">
                    <input type="hidden" name="2" value="<?php echo $nbsanscommantaire;?>">
                    <input type="hidden" name="3" value="<?php echo $nbaveccommantaire;?>">
                    <input style="transform:translate(0,-100px);  " type="submit" class="btn btn-primary mr-2" value="Exporter PDF">
                  </form>
                </div>
              </div>
            </div>

</div>
<script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dropify.js"></script>
  <script type="text/javascript" src="formulaire.js"></script>
</body>
</html>
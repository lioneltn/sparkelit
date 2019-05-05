<?php 
session_start();
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

  <link rel="stylesheet" href="../../css/style.css">

  <link rel="shortcut icon" href="../../images/logoreduit.png" />
  <style type="text/css">


</style>
	<title>Afficher Poste</title>
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
                 
                        <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                    <img src="https://via.placeholder.com/39x39" alt="profile" />
                                    <span class="nav-profile-name">
                                        <?PHP echo $nom . "  " . $prenom ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                  <?php   
                                  if($type==1)
                                  {
                                   ?>
                                    <a class="dropdown-item" href = "../samples/profile.php">
                                  <?php
                                  }
                                  else
                                  {
                                  ?>
                                  <a class="dropdown-item" href = "../samples/profile-2.php">
                                  <?php 
                                  }    
                                  ?>
                                        <i class="icon-settings text-primary mr-2"></i>
                                        Profil
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <?php if($type==1)
                                    {
                                     ?>
                                    <a class="dropdown-item" href="../samples/login.php">
                                    <?php
                                    }
                                    else
                                    { ?>
                                      <a class="dropdown-item" href="../samples/login-2.php">
                                    <?php
                                    } ?>
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
                            <a href="../samples/orders.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Commandes</span><i class="menu-arrow"></i></a>
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
           
                </ul>
              </div>
            </li> 
             
            <li class="nav-item">
              <a href="../ajouterMetadonnee.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Metadonnee</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../ajouterMetadonnee.php"> Ajouter metadonnee</a></li>
                  <li class="nav-item"><a class="nav-link" href="../afficherMetadonnee.php">Afficher metadonnee</a></li>
                
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
       
    
	<div class="card">
    
 

              <div class="col-12">
              <div class="card">
                <div class="card-body">
                        <div class="col-md-3 grid-margin" style="padding-right: 10px;">
                        <input class="form-control" style="border-color: grey ;" type="text" name="recherche" id="rechercheReference" placeholder="Recherche par titre" onkeyup="recherchetitre(this.value);">
                      </div>
                  <div class="row" id="contenu">
                   
                    
                    
                        <?php 
                          include "../../../afficherposteBD.php" ;
                          chdir(__DIR__);
                        ?>
                      
                    
                  </div>
                </div>
              </div>
            </div>

</div>
<script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>

  <script src="../../js/template.js"></script>

  <script src="../../js/dropify.js"></script>
  <script type="text/javascript" src="formulaire.js"></script>
  <script type="text/javascript">
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
                xmlhttp.open("POST","../../../afficherposteBD.php",true);
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
                xmlhttp.open("GET","../../../recherchepostepartitreback.php?recherche="+str,true);
                xmlhttp.send();
            }
        }
    function trieNote()
    {
        var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../../../afficherpostbackTrieNoteDesc.php",true);
                xmlhttp.send();
    }
    function trieDate()
    {
        var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../../../afficherpostbackTrieDateDesc.php",true);
                xmlhttp.send();
    }
  </script>
</body>
</html>
<?php 
include "../../../../core/postecore.php";

$poste1C= new posteC();

$liste=$poste1C->afficherposte($_POST['id']);
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
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/logoreduit.png" />


  <style type="text/css">
    .Erreur
    {
      color:#D8000C ;/*34e734*/
      font-size: 10px;
    }
  </style>
  <title>Modifier Poste</title>
</head>
<body>
<?PHP
chdir(__DIR__);

  include "../../../../entities/comptes/admin.php";
  include "../../../../core/comptes/adminC.php";
  //echo $_SESSION['email_admin'];

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
            <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../images/logoreduit.png" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
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
                                    <a class="dropdown-item" href = "../samples/profile.php">
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
              <a href="#" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Post</span><i class="menu-arrow"></i></a>
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
                  
                  <li class="nav-item"><a class="nav-link" href="../afficherFournisseur.php">Afficher fournisseurs</a></li>
                  
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
                <div class="card-body">
                  <h4 class="card-title">Gestion Poste</h4>
                  <p class="card-description">
                    <strong>Modifier poste</strong>
                  </p>
                 <form class="forms-sample" action="../../../modifierposteBD.php" method="POST" enctype="multipart/form-data" onsubmit="return controleform()">
                    <div class="form-group">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label" >Titre</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="Titre" name="titre" placeholder="Titre" value="<?php echo $liste['titre']; ?>" onfocusout="controleTitre()">
                        <span class="Erreur"></span>
                      </div>
                    </div>
                   <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" id="Description" name="description" rows="4" onfocusout="controleDescription()" ><?php echo $liste[2]; ?></textarea>
                      <span class="Erreur"></span>
                    </div>
                    <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Image</h4>
                  <input type="file" class="dropify" name="image" id="image">
                </div>
              </div>
              <input type="hidden" name="id" value="<?php echo $_POST['id'];?>">
              <input type="hidden" name="chemin" value="<?php echo $liste[3]; ?>">
                    <button type="submit" class="btn btn-primary mr-2" >Modifier</button>

                  </form>
                </div>
              </div>

</div>
<script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>


  <script src="../../js/template.js"></script>

  <script src="../../js/dropify.js"></script>
  <script type="text/javascript" src="formulaire.js"></script>


  <script type="text/javascript">
      
    const Titre=document.getElementById("Titre");
    const Description=document.getElementById("Description");
    const red="#D8000C" ;
    const green="#34e734";

    function checkifempty(field)
    {
        if(isvalueEmpty(field.value.trim()))
        {
            setInvalid(field,"Ne laissze pas se champs vide");
            return true;
        }
        else
        {
          setValid(field);
          return false
        }
    }


    function checkNom(field)
    {
      var value=field.value;
      var exp=/\w\s$/;
      if(value[0]==" ")
      {
        setInvalid(field,"Ce champs ne doit pas commencer par un espace");
        return false;
      }
      else
      {
          if(/^[a-zA-Z0-9\s]+$/.test(value))
          {
            setValid(field);
            return true;
          }
          else
          {
            setInvalid(field,"Ce champs doit comporter seulement des lettres ,des lettres et des espaces!");
            return false;
          }
      }
    }
    function isvalueEmpty(value)
    {
      if(value === "")
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    function setInvalid(field,message)
    {
      field.style.borderColor= red;
      field.nextElementSibling.innerHTML=message;

    }

    function setValid(field)
    {
      field.style.borderColor= green;
      field.nextElementSibling.innerHTML="";

    }

    function controleTitre()
    {
      
      if(checkifempty(Titre))
      {

        return false;
      }
      else
      {
        if(checkNom(Titre))
        {
          
          return true;
        }
        else
        {
          
          return false;
        }
      }
    }



    function controleDescription()
    {
      
      if(checkifempty(Description))
      {

        return false;
      }
      else
      {
        if(checkNom(Description))
        {
          
          return true;
        }
        else
        {
          
          return false;
        }
      }
    }



  
   
    function controleform()
    {
      if(controleTitre() && controleDescription())
      {
        return true;
      }
      else
      {
        return false;
      }
    }


  </script>
</body>
</html>
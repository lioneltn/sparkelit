<?PHP
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajouter produit</title>
	  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">

	<link rel="stylesheet" href="../css/style.css">
	<link rel="shortcut icon" href="../images/logoreduit.png" />
  <style type="text/css">
    .Erreur
    {
      color:#D8000C ;/*34e734*/
      font-size: 10px;
    }
  </style>
</head>
<body>
  <?PHP
  chdir(__DIR__);
  include "../../../entities/comptes/admin.php";
  include "../../../core/comptes/adminC.php";

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
      if($type == 2) {
        header('Location: samples/login.php');
      }
    }
  } else {
    header('Location: samples/login.php');
  }
  chdir(__DIR__);
  ?>
	<div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.php -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
            <div class="nav-top flex-grow-1">
                <div class="container d-flex flex-row h-100 align-items-center">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                        <a class="navbar-brand brand-logo" href="../index.php"><img src="../images/Logoreduit.png" alt="logo" /></a>
                        <a class="navbar-brand brand-logo-mini" href="../index.php"><img src="../images/logo-mini.svg" alt="logo" /></a>
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
                                    <a class="dropdown-item" href = "samples/profile.php">
                                        <i class="icon-settings text-primary mr-2"></i>
                                        Profil
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="samples/login.php">
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
                            <a href="../index.php" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Tableau de bord</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="Ajouterproduit.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Produits</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="Ajouterproduit.php"> Ajouter produit</a></li>
                                    <li class="nav-item"><a class="nav-link" href="afficherProduits.php">Afficher produits</a></li>
                                </ul>
                            </div>
                        </li>




                        <li class="nav-item">
                            <a href="ajoutercategorie.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Categorie</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="ajoutercategorie.php"> Ajouter Categorie</a></li>
                                    <li class="nav-item"><a class="nav-link" href="afficherCategorie.php">Afficher Categorie</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="forms/formulaire_ajouter_poste.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Post</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="forms/formulaire_ajouter_poste.php"> Ajouter post</a></li>

                                    <li class="nav-item"><a class="nav-link" href="forms/afficherpostadmin.php">Afficher posts</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/statpost.php">Statistiques posts</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="ajouterfournisseur.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Fournisseur</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="ajouterfournisseur.php"> Ajouter fournisseur</a></li>
                                    <li class="nav-item"><a class="nav-link" href="afficherFournisseur">Afficher fournisseurs</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="samples/orders.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Commandes</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="samples/orders.php"> commandes</a></li>
                                    <li class="nav-item"><a class="nav-link" href="samples/statistiques.php">statistiques des ventes</a></li>
                                </ul>
                            </div>
                        </li>
<li class="nav-item">
              <a href="ajouterOffre.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Offre</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="ajouterOffre.php"> Ajouter offre</a></li>
                  <li class="nav-item"><a class="nav-link" href="afficherOffres.php">Afficher offre</a></li>
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
                </ul>
              </div>
            </li> 
             
            <li class="nav-item">
              <a href="ajouterMetadonnee.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Metadonnee</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="ajouterMetadonnee.php"> Ajouter metadonnee</a></li>
                  <li class="nav-item"><a class="nav-link" href="afficherMetadonnee.php">Afficher metadonnee</a></li>
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
                </ul>
              </div>
            </li>



                    </ul>
                </div>
            </div>
        </nav>
	<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Gestion produit</h4>
                  <p class="card-description">
                    Ajouter un produit
                  </p>
                  <?php 
                  chdir(__DIR__);
                   ?>
                  <form class="forms-sample" method="POST" action="../../ajoutProduit.php" enctype="multipart/form-data" onsubmit="return controleform()">
                  	<div class="form-group">
                  		<label for="exampleInputType">Type</label>
                  		<?php 
                          include "../../afficherType.php";
                          chdir(__DIR__);

                       ?>
                  	</div>
                  	<div class="form-group">
                  		<label for="exampleInputCategorie">Categorie</label>
   							        <?PHP
                        if(isset($_COOKIE["type"]))
                        {
                          if($_COOKIE["type"]=="Homme" || $_COOKIE["type"]=="Femme")
                          {
                            include "../../afficherCategorieNomVetements.php";
                          }
                          if($_COOKIE["type"]=="Accesoire")
                          {
                            include "../../afficherCategorieNomAccesoires.php";
                          }
                        }
                        else
                        {
                          include "../../afficherCategorieNomVetements.php";
                        }

                        ?>
                  	</div>
                    <div class="form-group">
                    	
                      <label for="exampleInputReference">Reference</label>
                      <input type="text" class="form-control" id="Reference" placeholder="Reference" name="reference" required maxlength="100" onfocusout="controleReference()">
                      <span class="Erreur"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNom">Nom</label>
                      <input type="text" class="form-control" id="Nom" placeholder="Nom" name="nom" required maxlength="200" onfocusout="controleNom()">
                      <span class="Erreur"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleDescription">Description</label>
                      <textarea class="form-control" id="Description" rows="4" name="description" maxlength="500" required onfocusout="controleDescription()"></textarea>
                      <span class="Erreur"></span>
                    </div>

                    <div class="form-group">
                  		<label for="exampleInputType">Fournisseur</label>
                  		<?php 
                      chdir(__DIR__);

                        include "../../afficherFournisseurRef.php";
                       ?>
                  	</div>

                    <div class="form-group">
                      <label for="exampleInputPrix">Prix</label>
                      <input type="number" class="form-control" min="1" step="any" name="prix" required>
                    </div>

                    <div class="form-group">
                    	<div class="card">
                			<div class="card-body">
                  				<h4 class="card-title">Image du produit</h4>
                  				<input type="file" class="dropify" name="image" required />
                			</div>
              			</div>
                    </div>

                    <div class="form-group">
                      
                      <div class="row" id="couleurtaille">
                          <div class="col-md-3 grid-margin">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">Rouge</h4>
                                <div>
                                  <br><label>S</label><br>
                                  <input type="number" class="form-control" min="0" step="1"  name="Tailles1" required >
                                </div>
          
                                <div>
                                  <br><label>M</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillem1"required >
                                </div>

                                <div>
                                  <br><label>L</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillel1"required >
                                </div>

                                <div>
                                  <br><label>XL</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillexl1" required >
                                </div>
                                <br>
                                <div>
                                  <input type="file" class="dropify" name="image1" required />
                                </div>   
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3 grid-margin">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">Vert</h4>
                                <div>
                                  <br><label>S</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Tailles2" required>
                                </div>
          
                                <div>
                                  <br><label>M</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillem2" required>
                                </div>

                                <div>
                                  <br><label>L</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillel2" required>
                                </div>

                                <div>
                                  <br><label>XL</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillexl2" required >
                                </div>
                                <br>
                                <div>
                                  <input type="file" class="dropify" name="image2" required />
                                </div>   
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3 grid-margin">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">Bleu</h4>
                                <div>
                                  <br><label>S</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Tailles3" required >
                                </div>
          
                                <div>
                                  <br><label>M</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillem3" required >
                                </div>

                                <div>
                                  <br><label>L</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillel3" required>
                                </div>

                                <div>
                                  <br><label>XL</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillexl3" required>
                                </div>
                                <br>
                                <div>
                                  <input type="file" class="dropify" name="image3" required />
                                </div>    
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3 grid-margin">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">Jaune</h4>
                                <div>
                                  <br><label>S</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Tailles4" required>
                                </div>
          
                                <div>
                                  <br><label>M</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillem4" required>
                                </div>

                                <div>
                                 <br><label>L</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillel4" required>
                                </div>

                                <div>
                                  <br><label>XL</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillexl4" required >
                                </div>
                                <br>
                                <div>
                                  <input type="file" class="dropify" name="image4" required />
                                </div>    
                              </div>
                            </div>
                          </div>
                      </div>


                    </div>
                    

                    <button type="submit" id="ajouter" class="btn btn-primary mr-2" onclick="valider()">Ajouter</button>








                  </form>
                </div>
              </div>
              
 				
  </div>
<script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dropify.js"></script>
  <script src="../js/file-upload.js"></script>
  <script src="../js/typeahead.js"></script>
  <script src="../js/select2.js"></script>
  <!--<script src="../js/ajouterproduit.js"></script>-->
  <script type="text/javascript">
    
    function typechange() 
    {
      var x=document.getElementById("typeSelect").value;
      y=document.cookie="type="+x;
      if(x=="Accesoire")
      {
        window.location.href="AjouterproduitAccesoire.php";

      }
      else
      {
        location.reload();
      }
      
      
    }

    const Nom=document.getElementById("Nom");
    const Reference=document.getElementById("Reference");
    const Description=document.getElementById("Description");
    const red="#D8000C" ;
    const green="#34e734";

    function checkifempty(field)
    {
        if(isvalueEmpty(field.value.trim()))
        {
            setInvalid(field,"Ne laissez pas se champs vide");
            return true;
        }
        else
        {
          setValid(field);
          return false
        }
    }


    function checkNomProduit(field)
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
            setInvalid(field,"Ce champs doit comporter seulement des chiffres,des lettres et des espaces!");
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

    function controleNom()
    {
      
      if(checkifempty(Nom))
      {

        return false;
      }
      else
      {
        if(checkNomProduit(Nom))
        {
          
          return true;
        }
        else
        {
          
          return false;
        }
      }
    }
    function controleReference()
    {
       if(checkifempty(Reference))
      {

        return false;
      }
      else
      {
        if(checkNomProduit(Reference))
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
        if(checkNomProduit(Description))
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
      if(controleDescription() && controleReference() && controleNom())
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
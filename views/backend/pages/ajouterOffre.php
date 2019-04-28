<?PHP
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajouter offre</title>
	  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
 <!-- <link rel="icon" type="image/x-icon" href="../images/Logoreduit.png"><!--/icons/favicon.ico-->
 
	<link rel="stylesheet" href="../css/style.css">
	<link rel="shortcut icon" href="../images/logoreduit.png" />
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
                  <h4 class="card-title">Gestion offre</h4>
                  <p class="card-description">
                    Ajouter un offre
                  </p>
                  <?php 
                  chdir(__DIR__);
                   ?>
                   <form class="forms-sample" action="../../ajouterOffre.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group">
                      
                      <label for="exampleInputID">Identifiant</label>
                      <input type="text" class="form-control" id="exampleInputID" name ="id" placeholder="Identifiant" onfocusout="validerID()"/>
                      
                      <span class="helper-text" > </span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNom">Nom</label>
                      <input type="text" class="form-control" id="exampleInputNom" name ="nom" placeholder="Nom" onfocusout="validernom()" required/>
                      <span class="helper-text" > </span>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputDescripition">Descripition</label>
                      <input type="text" class="form-control" id="exampleInputDescripition" name ="desc" onfocusout="validerDesc()"  maxlength="100" required/>
                      <span class="helper-text" > </span>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputRef">Reference du produit</label>
                      <?php 
                      chdir(__DIR__);
                      include "../../afficherRefProduit.php"; ?>
                      <span class="helper-text" > </span>
                    </div>
                   
                  

                    <div class="form-group">
                      <label for="exampleInputPrix_anc">Remise</label>
                      <input type="text" class="form-control" id="exampleInputRemise" name ="remise"  maxlength="2" onfocusout="validerPrix_anc()" required/>
                      <span class="helper-text" > </span>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPrix_anc">Prix ancien</label>
                      <input type="text" class="form-control" id="exampleInputPrix_anc" name ="prix_anc"  maxlength="100" onfocusout="validerPrix_anc()" required/>
                      <span class="helper-text" > </span>
                    </div>

   
                     <div class="form-group">
                      <label for="exampleInputPrix">Date debut</label>
                         <input type="date" class="form-control" name ="dateD"  required/>
                      <span class="helper-text" > </span>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPrix">Date fin</label>
                         <input type="date" class="form-control" name ="dateF"  required/>
                      <span class="helper-text" > </span>
                    </div>
 
                     <div class="form-group">
                      <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Image du offre</h4>
                          <input type="file" class="dropify" name="image" />
                           
                      </div>
                    </div>
                    </div>

                     <script >
                       
                        function confirmerajouterOffre()
{
  
  swal({
    //swal("Hello world!");
  title: "Offre ajoutée!",
  //text: "You clicked the button!",
  icon: "success",

     });
}
const nom=document.getElementById("exampleInputNom");
const red ='#F44336';
function validernom()
{
//si il est vide
if(checkIfEmpty(nom))
  return;
//si il ya seulement des nombres
if(checkIfOnlyLetters(nom))
    return true;
}
function checkIfEmpty(field)
{
  if(isEmpty(field.value.trim()))
  {
    setInvalid(field,`${field.value} Ne laissez pas les champs vide!`)
    return true;
  }
  else 
  {
    setValid(field)
    return false;
  }
}


function isEmpty(value)
{
  if(value === "")
    return true;
      return false;
}


function setInvalid(field,message)
{

field.nextElementSibling.innerHTML = message;
field.nextElementSibling.style.color = red;
}

function setValid(field)
{

field.nextElementSibling.innerHTML = "";
//field.nextElementSibling.style.color = green;
}

function checkIfOnlyLetters(field)
{
  if(/^[A-Za-z0-9%]+$/.test(field.name))
  {
    setValid(field);
    return true;
  }
  else 
  {
        setInvalid(field,`${field.name} contient seulement nombres , caracteres et % `);
        return false;
  }
}


                     </script>

                    <button type="submit" id="ajouter" class="btn btn-primary mr-2" onclick="confirmerajouterOffre()" >Ajouter</button>
                    <button class="btn btn-light" onclick='location.href="ajouterOffre.php"'>Annuler</button>




                    
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
  <script src="../js/offre.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
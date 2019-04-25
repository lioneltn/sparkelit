<?PHP
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajouter fournisseur</title>
	  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">

	<link rel="stylesheet" href="../css/style.css">
	<link rel="shortcut icon" href="../images/favicon.png" />
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
                            <a href="ajouterfournisseur.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Commandes</span><i class="menu-arrow"></i></a>
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
                  <h4 class="card-title">Gestion fournisseur</h4>
                  <p class="card-description">
                    Ajouter un fournisseur
                  </p>
                  <form class="forms-sample" method="POST" action="../../ajoutFournisseur.php" onsubmit="return controleform()">
                    <div class="form-group">
                    	
                      <label for="exampleInputID">Nom</label>
                      <input type="text" class="form-control" id="Nom" placeholder="Nom" name="reference" required maxlength="50" onfocusout="controleNom()">
                      <span class="Erreur"></span>
                    </div>


                    <div class="form-group">
                      <label for="exampleAdresse">Pays</label>
                      <input type="text" class="form-control" id="Pays" placeholder="Pays" name="pays" required maxlength="50" onfocusout="controlePays()">
                      <span class="Erreur"></span>
                    </div>

                    <div class="form-group">
                      <label for="exampleAdresse">Region</label>
                      <input type="text" class="form-control" id="Region" placeholder="Region" name="region" maxlength="50" required onfocusout="controleRegion()">
                      <span class="Erreur"></span>
                    </div>

                    <div class="form-group">
                      <label for="exampleNumber">Ville</label>
                      <input type="text" class="form-control" id="Ville" placeholder="Ville" name="ville" maxlength="50" required onfocusout="controleVille()">
                      <span class="Erreur"></span>
                    </div>

                    <div class="form-group">
                      <label for="exampleEmail">Email</label>
                      <input type="email" class="form-control" id="Email" placeholder="Email" name="email" maxlength="50" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleNumber">Numero</label>
                      <input type="text" class="form-control" id="Numero" placeholder="Numero" name="numero" required onfocusout="controleNumero()">
                      <span class="Erreur"></span>
                    </div>

                   <!-- <div class="form-group">
                    	<div class="card">
                			<div class="card-body">
                  				<h4 class="card-title">Image du fournisseur</h4>
                  				<input type="file" class="dropify" required />
                			</div>
              			  </div>
                    </div>-->

                    <button type="submit" id="ajouter" class="btn btn-primary mr-2" onclick="validerfournisseur()">Ajouter</button>





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
    const Nom=document.getElementById("Nom");
    const Pays=document.getElementById("Pays");
    const Region=document.getElementById("Region");
    const Ville=document.getElementById("Ville");
    const Numero=document.getElementById("Numero");
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
          if(/^[a-zA-Z\s]+$/.test(value))
          {
            setValid(field);
            return true;
          }
          else
          {
            setInvalid(field,"Ce champs doit comporter seulement des lettres et des espaces!");
            return false;
          }
      }
    }

    function checkNumero(field)
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
          if(/^[0-9]+$/.test(value))
          {
            setValid(field);
            return true;
          }
          else
          {
            setInvalid(field,"Ce champs doit comporter seulement des chiffres!");
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



    function controlePays()
    {
      
      if(checkifempty(Pays))
      {

        return false;
      }
      else
      {
        if(checkNomProduit(Pays))
        {
          
          return true;
        }
        else
        {
          
          return false;
        }
      }
    }



    function controleRegion()
    {
      
      if(checkifempty(Region))
      {

        return false;
      }
      else
      {
        if(checkNomProduit(Region))
        {
          
          return true;
        }
        else
        {
          
          return false;
        }
      }
    }



    function controleVille()
    {
      
      if(checkifempty(Ville))
      {

        return false;
      }
      else
      {
        if(checkNomProduit(Ville))
        {
          
          return true;
        }
        else
        {
          
          return false;
        }
      }
    }



    function controleNumero()
    {
      
      if(checkifempty(Numero))
      {

        return false;
      }
      else
      {
        if(checkNumero(Numero))
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
      if(controleNom() && controleRegion() && controlePays() && controleVille() && controleNumero())
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
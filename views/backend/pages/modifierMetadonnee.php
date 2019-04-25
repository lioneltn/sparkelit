<?PHP
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier metadonnee</title>
	  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">

	<link rel="stylesheet" href="../css/style.css">
	<link rel="shortcut icon" href="../images/Logoreduit.png" />
</head>
<body>
	<div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.php -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100 align-items-center">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="../../frontend/index.php"><img src="../images/Logoreduit.png" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="../../../frontend/index.php"><img src="../images/logo-mini.svg" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">
           
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
              <a href="ajouterproduit.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Produits</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="ajouterproduit.php"> Ajouter produit</a></li>
                  <li class="nav-item"><a class="nav-link" href="modifierproduit.php">Modifier produit</a></li>
                  <li class="nav-item"><a class="nav-link" href="afficherProduits.php">Afficher produits</a></li>
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
                </ul>
              </div>
            </li>
  <li class="nav-item">
              <a href="forms/formulaire_ajouter_poste.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Post</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="forms/formulaire_ajouter_poste.php"> Ajouter post</a></li>
                  
                  <li class="nav-item"><a class="nav-link" href="forms/afficherpostadmin.php">Afficher posts</a></li>
                  
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a href="modifierfournisseur.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Fournisseur</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="ajouterfournisseur.php"> Ajouter fournisseur</a></li>
                  <li class="nav-item"><a class="nav-link" href="modifierfournisseur.php">Modifier fournisseur</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.php">Afficher fournisseurs</a></li>
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a href="ajoutercategorie.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Categorie</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="ajoutercategorie.php"> Ajouter Categorie</a></li>
                  <li class="nav-item"><a class="nav-link" href="modifiercategorie.php">Modifier Categorie</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.php">Afficher fournisseurs</a></li>
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
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
                  <h4 class="card-title">Gestion Metadonnee</h4>
                  <p class="card-description">
                    
                  </p>
                 


                   <form class="forms-sample" action="../../modifierMetadonnee.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group">
                      
                      <label for="exampleInputID">Reference</label>
                      <input type="test" class="form-control" id="exampleInputID" name ="ref" placeholder="Reference" value="<?PHP echo $_POST["ref"]; ?> "/>
                      <span class="helper-text" > </span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNom">Descripition</label>
                      <input type="text" class="form-control" name ="desc"  maxlength="50" required/>
                      <span class="helper-text" > </span>
                    </div>
                    
 
                     <div class="form-group">
                      <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Image du Metadonnee</h4>
                          <input type="file" class="dropify" name="logo" />
                           
                      </div>
                    </div>
                    </div>
<script >
                       
                        function confirmermodifierMeta()
{
  
  swal({
    //swal("Hello world!");
  title: "Metadonnee modifiée!",
  //text: "You clicked the button!",
  icon: "success",

     });
   

}
                     </script>
                     

                    <button type="submit" name="modifier" id="modifier" onclick="confirmermodifierMeta()" class="btn btn-primary mr-2">Modifier</button>
                    <button class="btn btn-light" onclick='location.href="afficherMetadonnee.php"'>Annuler</button>
                    
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
  <script src="../js/ajouterproduit.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../js/offre.js"></script>
</body>
</html>
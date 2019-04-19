<!DOCTYPE html>
<html>
<head>
	<title>Afficher Offres</title>
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
              <a href="#" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Produits</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="Ajouterproduit.php"> Ajouter produit</a></li>
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
              <a href="ajouterfournisseur.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Fournisseur</span><i class="menu-arrow"></i></a>
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
                  <h4 class="card-title">Afficher les offres</h4>
                  <div calss="row">
                    <div class="form-group" style="display: flex;">
                      <div class="col-md-3 grid-margin" style="padding-right: 10px;">
                        <input class="form-control" type="text" name="recherche" id="rechercherID" placeholder="Identifiant" onkeyup="rechercherParID(this.value);">
                      </div>
                      <div class="col-md-3 grid-margin" style="padding-right: 10px; ">
                        <input class="form-control" type="text" name="recherche" id="rechercherNom" placeholder="Nom" onkeyup="rechercherParNom(this.value);">
                      </div>

                  </div>
                  <div id="contenu">
                  <?php include "../../afficherOffres.php";
                  chdir(__DIR__) ?>
                  </div>
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../js/offre.js" ></script>


  <script>
function rechercherParNom(str)
    {
      //var x=document.getElementById("sortable-table-2");
      
      document.getElementById("rechercherID").value="";
      if(str=="")
      {
          //x.style.display="block";
          var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../afficherOffres.php",true);
        xmlhttp.send();
      }
      else
      {
        //x.style.display="none";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../../cherchernom.php?recherche="+str,true);
        xmlhttp.send();
      }
    }

function rechercherParID(str)
    {
      //var x=document.getElementById("sortable-table-2");
      
      document.getElementById("rechercherNom").value="";
      if(str=="")
      {
          //x.style.display="block";
          var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../afficherOffres.php",true);
        xmlhttp.send();
      }
      else
      {
        //x.style.display="none";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../../chercher.php?recherche="+str,true);
        xmlhttp.send();
      }
    }



  </script>
  
</body>
</html>
<?php 
unset($_COOKIE["type"]);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Afficher produit</title>
	  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">

	<link rel="stylesheet" href="../css/style.css">
	<link rel="shortcut icon" href="../images/favicon.png" />
</head>
<body>
	<div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.php -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100 align-items-center">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center">
            <a class="navbar-brand brand-logo" href="index.php"><img src="../images/Logoreduit.png" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../images/logo-mini.svg" alt="logo"/></a>
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
              <a href="../index.php" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Dashboard</span></a>
            </li>
            

            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Produits</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="Ajouterproduit.php"> Ajouter produit</a></li>
                  <li class="nav-item"><a class="nav-link" href="afficherProduits.php">Afficher produits</a></li>
                 
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
                  
                  <li class="nav-item"><a class="nav-link" href="afficherFournisseur.php">Afficher fournisseurs</a></li>
                 
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
                  <h4 class="card-title">Afficher les produits</h4>
                  <div calss="row">
                    <div class="form-group" style="display: flex;">
                      <div class="col-md-3 grid-margin" style="padding-right: 10px;">
                        <input class="form-control" type="text" name="recherche" id="rechercheReference" placeholder="Reference" onkeyup="recherche(this.value);">
                      </div>
                      <div class="col-md-3 grid-margin" style="padding-right: 10px; ">
                        <input class="form-control" type="text" name="recherche" id="rechercheFournisseur" placeholder="Fournisseur" onkeyup="recherchefournisseur(this.value);">
                      </div>

                      <div class="col-md-3 grid-margin" style="padding-right: 10px; ">
                        <input class="form-control" type="text" name="recherche" id="rechercheNom" placeholder="Nom" onkeyup="recherchenom(this.value);">
                      </div>

                      <div class="col-md-3 grid-margin" style="padding-right: 10px; ">
                        <select class="form-control" onchange="recherchetype(this.value)">
                          <option value="" selected="selected"></option>
                          <option value="Homme">Homme</option>
                          <option value="Femme">Femme</option>
                          <option value="Accesoire">Accesoire</option>
                        </select>
                      </div>

                  </div>
                  <div id="contenu">
                  <?php include "../../afficherproduittableau.php";
                  chdir(__DIR__) ?>
                  </div>
                </div>
  </div>

  <div id="modelsupprimer_bg" class="modelsupprimer_bg" style="background-color: rgba(0,0,0,0.7);height: 100%;width: 100%;position: absolute;top: 0; z-index: 1000;justify-content: center;align-items: center;display: none;">
        <div class="modelsupprimer-content" style="width: 400px;height: 200px;background-color: white;position: relative; border-radius: 5px;text-align: center;">
          <?php
          echo $_POST['reference'];
          ?>
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
  <script type="text/javascript">
    function deletecookie()
    {
      document.cookie ="type=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }

    function trienom()
    {

      document.getElementById("rechercheReference").value="";
      document.getElementById("rechercheNom").value="";
      document.getElementById("rechercheFournisseur").value="";
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../trieproduitnom.php",true);
        xmlhttp.send();
    }


    function triedescription()
    {

      document.getElementById("rechercheReference").value="";
      document.getElementById("rechercheNom").value="";
      document.getElementById("rechercheFournisseur").value="";
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../trieproduitdescription.php",true);
        xmlhttp.send();
    }


    function triereference()
    {

      document.getElementById("rechercheReference").value="";
      document.getElementById("rechercheNom").value="";
      document.getElementById("rechercheFournisseur").value="";
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../trieproduitreference.php",true);
        xmlhttp.send();
    }

    function trietype()
    {

      document.getElementById("rechercheReference").value="";
      document.getElementById("rechercheNom").value="";
      document.getElementById("rechercheFournisseur").value="";
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../trieproduittype.php",true);
        xmlhttp.send();
    }

    function trieprix()
    {

      document.getElementById("rechercheReference").value="";
      document.getElementById("rechercheNom").value="";
      document.getElementById("rechercheFournisseur").value="";
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../trieproduitprix.php",true);
        xmlhttp.send();
    }

    function triecategorie()
    {
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../trieproduitcategorie.php",true);
        xmlhttp.send();
    }

    function triefournisseur()
    {
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../trieproduitfournisseur.php",true);
        xmlhttp.send();
    }

    function recherche(str)
    {
      //var x=document.getElementById("sortable-table-2");
      document.getElementById("rechercheFournisseur").value="";
      document.getElementById("rechercheNom").value="";
      if(str=="")
      {
          //x.style.display="block";
          var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../afficherproduittableau.php",true);
        xmlhttp.send();
      }
      else
      {
        //x.style.display="none";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../../rechercheproduitparreference.php?recherche="+str,true);
        xmlhttp.send();
      }
    }

    function recherchefournisseur(str)
    {
      //var x=document.getElementById("sortable-table-2");
      document.getElementById("rechercheReference").value="";
      document.getElementById("rechercheNom").value="";
      if(str=="")
      {
          //x.style.display="block";
          var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../afficherproduittableau.php",true);
        xmlhttp.send();
      }
      else
      {
        //x.style.display="none";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../../rechercheproduitparfournisseur.php?recherche="+str,true);
        xmlhttp.send();
      }
    }


    function recherchenom(str)
    {
      //var x=document.getElementById("sortable-table-2");
      document.getElementById("rechercheReference").value="";
      document.getElementById("rechercheFournisseur").value="";
      if(str=="")
      {
          //x.style.display="block";
          var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../afficherproduittableau.php",true);
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
        xmlhttp.open("GET","../../rechercheproduitparnom.php?recherche="+str,true);
        xmlhttp.send();
      }
    }


    function recherchetype(str)
    {
      //var x=document.getElementById("sortable-table-2");
      document.getElementById("rechercheReference").value="";
      document.getElementById("rechercheNom").value="";
      document.getElementById("rechercheFournisseur").value="";
      if(str=="")
      {
          //x.style.display="block";
          var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../afficherproduittableau.php",true);
        xmlhttp.send();
      }
      else
      {
        //x.style.display="none";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../../rechercheproduitpartype.php?recherche="+str,true);
        xmlhttp.send();
      }
    }

  </script>
</body>
</html>
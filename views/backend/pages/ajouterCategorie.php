<!DOCTYPE html>
<html>
<head>
  <title>Ajouter Categorie</title>
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
              <a href="ajouterproduit.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Produits</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="ajouterproduit.php"> Ajouter produit</a></li>
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
                  <h4 class="card-title">Gestion Categorie</h4>
                  <p class="card-description">
                    Ajouter une categorie
                  </p>
                  <form class="forms-sample" method="POST" action="../../ajoutCategorie.php" onsubmit="return controleform()">
                    <div class="form-group">
                      <label for="exampleInputNom">Nom</label>
                      <input type="text" class="form-control" id="Nom" placeholder="Nom" name="nom" maxlength="50" required onfocusout="controleNom()">
                      <span class="Erreur"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCategorie">Type</label>
                      <select class="form-control" name="type">
                        <option value="Accesoires"> Accesoires
                        <option value="Vetement"> Vetement  
                      </select>
                    </div>

                    <button type="submit" id="ajouter" class="btn btn-primary mr-2" onclick="valider()">Ajouter</button>
                  </form>
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
          if(/^[a-zA-Z]+$/.test(value))
          {
            setValid(field);
            return true;
          }
          else
          {
            setInvalid(field,"Ce champs doit comporter seulement des lettres!");
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
   
    function controleform()
    {
      if(controleNom())
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
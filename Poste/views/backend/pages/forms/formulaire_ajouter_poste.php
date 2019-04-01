
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
  <link rel="shortcut icon" href="../images/favicon.png" />

  <style type="text/css">
    .Erreur
    {
      color:#D8000C ;/*34e734*/
      font-size: 10px;
    }
  </style>
  <title>Ajouter poste</title>
</head>
<body>
  <div class="container-scroller">
  <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100 align-items-center">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center">
            <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../images/logoreduit.png" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
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
              <a href="../../index.php" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Dashboard</span></a>
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
              <a href="#" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Post</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="formulaire_ajouter_poste.php"> Ajouter post</a></li>
                  
                  <li class="nav-item"><a class="nav-link" href="afficherpostadmin.php">Afficher posts</a></li>
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
              <a href="../ajoutercategorie.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Categorie</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../ajoutercategorie.php"> Ajouter Categorie</a></li>
                  <li class="nav-item"><a class="nav-link" href="../afficherCategorie.php">Afficher Categorie</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- partial -->
  <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Gestion Poste</h4>
                  <p class="card-description">
                   <strong>Ajouter poste</strong>
                  </p>
                  <form class="forms-sample" action="../../../ajouterposteBD.php" method="POST" enctype="multipart/form-data" onsubmit="return controleform()">
                    <div class="form-group">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Titre</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="Titre" name="titre" placeholder="Titre" required maxlength="50" onfocusout="controleTitre()">
                        <span class="Erreur"></span>
                      </div>
                    </div>
                   <div class="form-group">
                      <label for="exampleTextarea1">Discription</label>
                      <textarea class="form-control" id="Description" name="description" rows="4" required maxlength="300" onfocusout="controleDescription()"></textarea>
                      <span class="Erreur"></span>
                    </div>
                    <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Image</h4>
                  <input type="file" class="dropify" id="image" name="image" required/>
                </div>
              </div>
                    <button type="submit" class="btn btn-primary mr-2" >Ajouter</button>
                    
                  </form>
                </div>
              </div>
<?php chdir(__DIR__);?>
</div>
<script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/dropify.js"></script>
  <script type="text/javascript" src="formulaire2.js"></script>
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


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
              <a href="#" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Produits</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="#"> Ajouter produit</a></li>
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
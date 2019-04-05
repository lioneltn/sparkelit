
<?php 

include "../../../core/produitC.php";
$produitC= new produitC();
if(isset($_POST['reference']))
{
    $liste=$produitC->afficherProduitParRef($_POST['reference']);
    if($liste['quantite']==NULL)
    {
      $listeDetails=$produitC->afficherDetailsParRef($_POST['reference']);
    }
    
}
else
{
   $liste=$produitC->afficherProduitParRef($_COOKIE['reference']);
    if($liste['quantite']==NULL)
    {
      $listeDetails=$produitC->afficherDetailsParRef($_COOKIE['reference']);
    }
   
}
if($liste['quantite']==NULL)
{
  foreach ($listeDetails as $row) {
  if($row["couleur"]=="Rouge")
  {
    $ri=$row["image"];
  }

  if($row["couleur"]=="Vert")
  {
    $vi=$row["image"];
  }

  if($row["couleur"]=="Bleu")
  {
    $bi=$row["image"];
  }

  if($row["couleur"]=="jaune")
  {
    $ji=$row["image"];
  }

  if($row["taille"]=="small" && $row["couleur"]=="Rouge")
  {
    $rs=$row["quantite"];
    $rsi=$row["image"];
  }

  if($row["taille"]=="Meduim" && $row["couleur"]=="Rouge")
  {
    $rm=$row["quantite"];
    $rmi=$row["image"];
  }

  if($row["taille"]=="Large" && $row["couleur"]=="Rouge")
  {
    $rl=$row["quantite"];
    $rli=$row["image"];
  }

  if($row["taille"]=="XtraLarge" && $row["couleur"]=="Rouge")
  {
    $rxl=$row["quantite"];
    $rxli=$row["image"];
  }

  if($row["taille"]=="small" && $row["couleur"]=="Vert")
  {
    $vs=$row["quantite"];
    $vsi=$row["image"];
  }

  if($row["taille"]=="Meduim" && $row["couleur"]=="Vert")
  {
    $vm=$row["quantite"];
    $vmi=$row["image"];
  }

  if($row["taille"]=="Large" && $row["couleur"]=="Vert")
  {
    $vl=$row["quantite"];
    $vsi=$row["image"];
  }

  if($row["taille"]=="XtraLarge" && $row["couleur"]=="Vert")
  {
    $vxl=$row["quantite"];
    $vxli=$row["image"];
  }

  if($row["taille"]=="small" && $row["couleur"]=="Bleu")
  {
    $bs=$row["quantite"];
    $bsi=$row["image"];
  }

  if($row["taille"]=="Meduim" && $row["couleur"]=="Bleu")
  {
    $bm=$row["quantite"];
    $bmi=$row["image"];
  }

  if($row["taille"]=="Large" && $row["couleur"]=="Bleu")
  {
    $bl=$row["quantite"];
    $bli=$row["image"];
  }

  if($row["taille"]=="XtraLarge" && $row["couleur"]=="Bleu")
  {
    $bxl=$row["quantite"];
    $bxli=$row["image"];
  }

  if($row["taille"]=="small" && $row["couleur"]=="jaune")
  {
    $js=$row["quantite"];
    $jsi=$row["image"];
  }

  if($row["taille"]=="Meduim" && $row["couleur"]=="jaune")
  {
    $jm=$row["quantite"];
    $jmi=$row["image"];
  }

  if($row["taille"]=="Large" && $row["couleur"]=="jaune")
  {
    $jl=$row["quantite"];
    $jli=$row["image"];
  }

  if($row["taille"]=="XtraLarge" && $row["couleur"]=="jaune")
  {
    $jxl=$row["quantite"];
    $jxli=$row["image"];
  }
}

}
else
{
  $rs=0;
  $rm=0;
  $rl=0;
  $rxl=0;

  $vs=0;
  $vm=0;
  $vl=0;
  $vxl=0;

  $js=0;
  $jm=0;
  $jl=0;
  $jxl=0;

  $bs=0;
  $bm=0;
  $bl=0;
  $bxl=0;
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Modifier produit</title>
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
                  <li class="nav-item"><a class="nav-link" href="ajouterproduit.php"> Ajouter produit</a></li>
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
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a href="ajouterfournisseur.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Fournisseur</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="ajouterfournisseur.php"> Ajouter fournisseur</a></li>
                  <li class="nav-item"><a class="nav-link" href="afficherFournisseur.php">Afficher fournisseurs</a></li>
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
                  <li class="nav-item"><a class="nav-link" href="afficherCategorie.php">Afficher Categorie</a></li>
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
                    Modifier un produit
                  </p>
                  <form class="forms-sample" action="../../modifierproduit.php" method="POST" enctype="multipart/form-data" onsubmit="return controleform()">
                  	<div class="form-group">
                  		<label for="exampleInputCategorie">Type</label>
                  		<?php 
                      chdir(__DIR__);
                        include "../../afficherTypeModifier.php";
                      chdir(__DIR__);
                        ?>

                  	</div>
                  	<div class="form-group">
                  		<label for="exampleInputType">Categorie</label>
                  		<?php
                        chdir(__DIR__);
                        if(isset($_COOKIE['type'])==false)
                        {
                          if($liste["type"]=="Homme" || $liste["type"]=="Femme")
                          {
                            include "../../afficherCategorieNomVetementsPourModifier.php";
                          }
                          else
                          {
                              include "../../afficherCategorieNomAccesoiresPourModifier.php";
                          }
                        }
                        else
                        {
                          if($_COOKIE["type"]=="Homme" || $_COOKIE["type"]=="Femme")
                          {
                            include "../../afficherCategorieNomVetements.php";
                          }
                          else
                          {
                             include "../../afficherCategorieNomAccesoires.php";
                          }
                        }
                        ?>
                  	</div>
                    <div class="form-group">
                    	
                      <label for="exampleInputReference">Reference</label>
                      <input type="text" class="form-control" name="reference" id="reference" value="<?php echo $liste['reference'];?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNom">Nom</label>
                      <input type="text" class="form-control" id="Nom" placeholder="Nom" name="nom" onfocusout="controleNom()" value="<?php echo $liste['nom'];?>">
                      <span class="Erreur"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleDescription">Description</label>
                      <textarea class="form-control" id="Description" name="description" onfocusout="controleDescription()" rows="4"><?php echo $liste['description'];?></textarea>
                      <span class="Erreur"></span>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputType">Fournisseur</label>
                      <?php
                      chdir(__DIR__);
                      include "../../afficherFournisseurRefPourModifier.php";
                      ?>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPrix">Prix</label>
                      <input type="number" class="form-control" min="1" step="any" name="prix" value="<?php echo $liste['prix'];?>"required>
                    </div>

                    <div class="form-group">
                    	<div class="card">
                			<div class="card-body">
                  				<h4 class="card-title">Image du produit</h4>
                          <img  style="max-width: 40%;max-height: 40%;position: relative;left:50%;transform: translate(-50%,0px);padding-bottom: 50px;"  src="../../<?php echo $liste['thumbnail'];?>">
                  				<input type="file" class="dropify" name="image" />
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
                                  <input type="number" class="form-control" min="0" step="1"  name="Tailles1" value="<?php echo $rs;?>">
                                </div>
          
                                <div>
                                  <br><label>M</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillem1" value="<?php echo $rm;?>">
                                </div>

                                <div>
                                  <br><label>L</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillel1" value="<?php echo $rl;?>">
                                </div>

                                <div>
                                  <br><label>XL</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillexl1" value="<?php echo $rxl;?>">
                                </div>
                                <br>
                                <div>
                                  <?php 
                                  if($liste['quantite']==NULL)
                                  {
                                    ?>
                                    <img  style="max-width: 100%;max-height: 100%;padding-bottom: 10px;" src="../../<?php echo $ri;?>">
                                    <input type="file" class="dropify" name="image1"/>
                                  <?php
                                  } 
                                  else
                                  {
                                  ?>
                                    <input type="file" class="dropify" name="image1" required />
                                  <?php
                                  }
                                  ?>
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
                                  <input type="number" class="form-control" min="0" step="1" name="Tailles2" value="<?php echo $vs;?>">
                                </div>
          
                                <div>
                                  <br><label>M</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillem2" value="<?php echo $vm;?>">
                                </div>

                                <div>
                                  <br><label>L</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillel2" value="<?php echo $vl;?>">
                                </div>

                                <div>
                                  <br><label>XL</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillexl2" value="<?php echo $vxl;?>" >
                                </div>
                                <br>
                                <div>
                                  <?php 
                                  if($liste['quantite']==NULL)
                                  {
                                  ?>
                                    <img  style="max-width: 100%;max-height: 100%;padding-bottom: 10px;" src="../../<?php echo $vi;?>">
                                    <input type="file" class="dropify" name="image2"/>
                                  <?php
                                  } 
                                  else
                                  {
                                  ?>
                                    <input type="file" class="dropify" name="image2" required />
                                  <?php
                                  }
                                  ?>
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
                                  <input type="number" class="form-control" min="0" step="1" name="Tailles3" value="<?php echo $bs;?>">
                                </div>
          
                                <div>
                                  <br><label>M</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillem3" value="<?php echo $bm;?>">
                                </div>

                                <div>
                                  <br><label>L</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillel3" value="<?php echo $bl;?>">
                                </div>

                                <div>
                                  <br><label>XL</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillexl3" value="<?php echo $bxl;?>">
                                </div>
                                <br>
                                <div>
                                  <?php if($liste['quantite']==NULL)
                                  {
                                    ?>
                                    <img  style="max-width: 100%;max-height: 100%;padding-bottom: 10px;" src="../../<?php echo $bi;?>">
                                    <input type="file" class="dropify" name="image3"/>
                                <?php
                                  } 
                                  else
                                  {
                                ?>
                                    <input type="file" class="dropify" name="image3" required />
                                  <?php
                                  }
                                  ?>
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
                                  <input type="number" class="form-control" min="0" step="1" name="Tailles4" value="<?php echo $js;?>">
                                </div>
          
                                <div>
                                  <br><label>M</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillem4" value="<?php echo $jm;?>">
                                </div>

                                <div>
                                 <br><label>L</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillel4" value="<?php echo $jl;?>">
                                </div>

                                <div>
                                  <br><label>XL</label><br>
                                  <input type="number" class="form-control" min="0" step="1" name="Taillexl4" value="<?php echo $jxl;?>">
                                </div>
                                <br>
                                <div>
                                  <?php 
                                  if($liste['quantite']==NULL)
                                  {
                                  ?>
                                    <img  style="max-width: 100%;max-height: 100%;padding-bottom: 10px;" src="../../<?php echo $ji;?>">
                                    <input type="file" class="dropify" name="image4"/>
                                  <?php
                                  } 
                                  else
                                  {
                                  ?>
                                    <input type="file" class="dropify" name="image4" required />
                                  <?php
                                  }
                                  ?>
                                </div>    
                              </div>
                            </div>
                          </div>
                      </div>


                    </div>

                    <button type="submit" id="ajouter" class="btn btn-primary mr-2" onclick="modifier()">Modifier</button>







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
      var z=document.getElementById("reference").value;
      y=document.cookie="type="+x;
      if(x=="Accesoire")
      {
        h=document.cookie="reference="+z;
        window.location.href="modifierproduitaccesoires.php";
      }
      else
      {
        location.reload();
      }
    }


    const Nom=document.getElementById("Nom");
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
   /* function controleReference()
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

    }*/

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
      if(controleDescription() && controleNom())
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
<?php 
session_start();
?>
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
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <style type="text/css">


</style>
	<title>Modifier Poste</title>
</head>
<body>


  <div class="container-scroller">
  <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
            <div class="nav-top flex-grow-1">
                <div class="container d-flex flex-row h-100 align-items-center">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                        <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../images/Logoreduit.png" alt="logo" /></a>
                        <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/logo-mini.svg" alt="logo" /></a>
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
                                    <a class="dropdown-item" href = "../samples/profile.php">
                                        <i class="icon-settings text-primary mr-2"></i>
                                        Profil
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../samples/login.php">
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
                            <a href="../../index.php" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Tableau de bord</span></a>
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
                            <a href="../ajoutercategorie.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Categorie</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="../ajoutercategorie.php"> Ajouter Categorie</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../afficherCategorie.php">Afficher Categorie</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="formulaire_ajouter_poste.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Post</span><i class="menu-arrow"></i></a>
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
                                    <li class="nav-item"><a class="nav-link" href="../afficherFournisseur">Afficher fournisseurs</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="../ajouterfournisseur.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Commandes</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="../samples/orders.php"> commandes</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../samples/statistiques.php">statistiques des ventes</a></li>
                                </ul>
                            </div>
                        </li>
<li class="nav-item">
              <a href="../ajouterOffre.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Offre</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../ajouterOffre.php"> Ajouter offre</a></li>
                  <li class="nav-item"><a class="nav-link" href="../afficherOffres.php">Afficher offre</a></li>
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
                </ul>
              </div>
            </li> 
             
            <li class="nav-item">
              <a href="../ajouterMetadonnee.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Metadonnee</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../ajouterMetadonnee.php"> Ajouter metadonnee</a></li>
                  <li class="nav-item"><a class="nav-link" href="../afficherMetadonnee.php">Afficher metadonnee</a></li>
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
                </ul>
              </div>
            </li>



                    </ul>
                </div>
            </div>
        </nav>

    <!-- partial -->
	<div class="card">
               <!-- <div class="card-body">
                  <h4 class="card-title">Gestion Poste</h4>
                  <p class="card-description">
                    <strong>Modifier poste</strong>
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Titre</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="Titre" name="Titre" placeholder="Titre">
                      </div>
                    </div>
                   <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" id="Discription" name="Description" rows="4"></textarea>
                    </div>
                    <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Image</h4>
                  <input type="file" class="dropify" name="image" id="image"/>
                </div>
              </div>
                    <button type="submit" class="btn btn-primary mr-2" ">Modifier</button>
                    <button class="btn btn-light">Annuler</button>

                  </form>
                </div>
              </div>-->
              <div class="table-sorter-wrapper col-lg-12 table-responsive">
                <?php 
                  include "../../../afficherposteBD.php" ;
                ?>
              </div>





</div>

  <div id="modelsupprimer_bg" class="modelsupprimer_bg" style="background-color: rgba(0,0,0,0.7);min-height: 100%;min-width: 100%;position: fixed; bottom: 0; right: 0; z-index: 1000;justify-content: center;display: flex; align-items: center;">
        <div class="modelsupprimer-content" style="width: 400px;height: 200px;background-color: white;position: relative; border-radius: 5px;text-align: center;align-items: center;">
          <div id="closemodelsupprimer" style="font-size: 30px;transform: rotate(45deg);position: absolute;right: 14px; top: 0;cursor: pointer;" onclick="document.location.href='afficherpostadmin.php'">+</div>
          <p style="position: relative;top:50% ;transform:translate(0,-60%);">Etes vous sur de supprimer le post <?php echo $_POST['titre']; ?>?</p>
          <form method="POST" action="../../../supprimerposteparadminok.php">
            <input type="hidden" class="hiddenreference" name="id" value="<?PHP echo $_POST['id']; ?>" readonly >
            <input style="position: absolute;bottom: 0;transform: translate(-60px,-10px);" type="submit" value="Supprimer" class="btn btn-danger mr-2">
          </form>
          
        </div>
  </div>
<script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dropify.js"></script>
  <script type="text/javascript" src="formulaire.js"></script>
</body>
</html>
<?PHP
session_start();
//$_SESSION['email'] = "dqsdqsd";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Modifer Compte Admin</title>
    <!-- plugins:css -->
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

    <!-- Javascript File -->
    <script type="text/javascript" language="javascript" src="../../js/my-account.js">

    </script>
</head>

<body>
    <?PHP
    include "../../../../entities/comptes/admin.php";
    include "../../../../core/comptes/adminC.php";

    echo $_SESSION['email_admin'];
    if (isset($_SESSION['email_admin'])) {
        $adminC = new AdminC();
        $result = $adminC->recupererAdmin($_SESSION['email_admin']);
        foreach ($result as $row) {
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $datenaissance = $row['datenaissance'];
            $sexe = $row['sexe'];
            $password = $row['motdepasse'];
        }
    } else {
        header('Location: login_admin.php');
    }
    ?>
    <div class="container-scroller">
        <!-- partial:../../partials/_horizontal-navbar.html -->
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
                                    <li class="nav-item"><a class="nav-link" href="statpost.php">Statistiques posts</a></li>
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
                            <a href="../samples/orders.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Commandes</span><i class="menu-arrow"></i></a>
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
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Modifier le compte administrateur</h4>

                                    <form id="example-form" method="POST">
                                        <div>
                                            <h3>Compte</h3>
                                            <section>
                                                <h6>Compte</h6>
                                                <div class="form-group">
                                                    <label>Adresse email</label>
                                                    <label class="form-control">
                                                        <?PHP echo $_SESSION['email_admin'] ?></label>
                                                    <small id="emailHelp" class="form-text text-muted">Nous n'allons jamais patarger votre email.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mot de passe</label>
                                                    <input type="password" class="form-control" placeholder="modifier le mot de passe" id="password" name="password" onfocusout="validatePassword(this)" value=<?PHP echo $password ?> required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mot de passe de confirmation</label>
                                                    <input type="password" class="form-control" placeholder="Mot de passe de confirmation" name="confirmPassword" id="confirmPassword" onfocusout="validateConfirmPassword(this)" value=<?PHP echo $password ?> required>
                                                </div>
                                            </section>
                                            <h3>Profile</h3>
                                            <section>
                                                <h6>Profile</h6>
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="entrer votre nom" onfocusout="validateFirstName(this)" value=<?PHP echo $nom ?> required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Prénom</label>
                                                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Prénom" onfocusout="validateFirstName(this)" value=<?PHP echo $prenom ?> required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="acc-birthday">Date de naissance</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" onfocusout="validateDateNaissance(this)" value=<?PHP echo $datenaissance ?> required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="acc-sexe">Sexe</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="sexe" id="sexe">
                                                            <?php   
                                if($sexe=="homme")
                                { ?>
                                <option value="homme" selected="selected">Homme </option>
                                <option value="femme">Femme </option>
                                <?php   
                                }
                                else
                                {
                                 ?>
                                <option value="homme" >Homme </option>
                                <option value="femme" selected="selected">Femme </option>
                                <?php
                                } 
                                ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </section>
                                            <h3>Confirmation</h3>
                                            <section>
                                                <h6>Confirmation</h6>
                                                <div class="form-group">
                                                    <br><br>
                                                    <label>Cliquer sur terminer pour confirmer les modifications </label>
                                                    <br><br><br><br><br><br><br>
                                                    <button type="submit" name="modifier" id="modifier" class="btn btn-primary mr-2">Terminer</button>
                                                </div>
                                        </div>
                                    </form>
                                    <?PHP
                                     if (isset($_POST['modifier']) and isset($_POST['password']) and isset($_POST['confirmPassword']) and isset($_POST['firstName']) and isset($_POST['lastName']) and isset($_POST['dateNaissance']) and $_POST['password'] == $_POST['confirmPassword']  and isset($_POST['sexe']) and $_POST['dateNaissance'] < "2014-01-01") {
                                          $admin1 = new Admin($_POST['firstName'], $_POST['lastName'], $_POST['dateNaissance'], $_POST['password'], $_SESSION['email_admin'], $_POST['sexe'], 1);
                                          $admin1C = new AdminC();
                                          $admin1C->modifierAdmin($admin1);
                                          //header('Location: modify_account_admin.php');
                                        echo "<script> window.location.href='../../index.php'</script>";
                                         echo "<div class=\"alert alert-success alert-intro\" role=\"alert\">modification reussite</div>";                                                                                                                                            }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">
                        <div class="w-100 clearfix">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../../vendors/js/vendor.bundle.base.js"></script>
        <script src="../../vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="../../js/template.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="../../js/wizard.js"></script>
        <!-- End custom js for this page-->
</body>

</html>
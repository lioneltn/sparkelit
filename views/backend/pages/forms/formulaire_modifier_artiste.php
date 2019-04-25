<?PHP
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

    <!-- Javascript File -->
    <script type="text/javascript" language="javascript" src="../../js/my-account.js">

    </script>

    <title>Modifier artiste</title>
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
            $type = $row['type'];
            if($type != 2) {
                header('Location: ../samples/login-2.php');
            }
        }
    } else {
        header('Location: ../samples/login-2.php');
    }
    ?>
    <div class="container-scroller">
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
            <div class="nav-top flex-grow-1">
                <div class="container d-flex flex-row h-100 align-items-center">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                        <a class="navbar-brand brand-logo" href="../samples/dashboard-artiste.php"><img src="../../images/Logoreduit.png" alt="logo" /></a>
                        <a class="navbar-brand brand-logo-mini" href="../samples/dashboard-artiste.php"><img src="images/logo-mini.svg" alt="logo" /></a>
                    </div>
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">
                        
                        <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                    <img src="https://via.placeholder.com/39x39" alt="profile" />
                                    <span class="nav-profile-name">
                                        <?PHP echo $nom . "  " . $prenom ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                    <a class="dropdown-item" href = "../samples/profile-2.php">
                                        <i class="icon-settings text-primary mr-2"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../samples/login-2.php">
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
                            <a href="../samples/dashboard-artiste.php" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Dashboard</span></a>
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


                    </ul>
                </div>
            </div>
        </nav>

        <!-- partial -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Gestion Artiste</h4>
                <p class="card-description">
                    <strong>Modifier artiste</strong>
                </p>
                <form method="POST" class="forms-sample">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Modifier Nom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Nom" onfocusout="validateFirstName(this)" value=<?PHP echo $nom ?> required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Modifier Prenom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Prenom" onfocusout="validateFirstName(this)" value=<?PHP echo $prenom ?> required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="acc-birthday" class="col-sm-3 col-form-label">Date de naissance</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" onfocusout="validateDateNaissance(this)" value=<?PHP echo $datenaissance ?> required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="acc-sexe" class="col-sm-3 col-form-label">Sexe</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="sexe" id="sexe">
                                <option value="homme" selected="<?PHP if ($sexe = " homme") echo "selected" ?>">Homme </option>
                                <option value="femme" selected="<?PHP if ($sexe = " femme") echo "selected" ?>">Femme </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Modifier Email</label>
                        <div class="col-sm-9">
                            <label class="form-control">
                                <?PHP echo $_SESSION['email_admin'] ?></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="modifier" id="modifier" onclick="contr=ole4()">Modifier </button>
                </form>
                <?PHP
                    if (isset($_POST['modifier']) and isset($_POST['firstName']) and isset($_POST['lastName']) and isset($_POST['dateNaissance'])  and isset($_POST['sexe']) and $_POST['dateNaissance'] < "2014-01-01") {
                        $admin1 = new Admin($_POST['firstName'], $_POST['lastName'], $_POST['dateNaissance'], "", $_SESSION['email_admin'], $_POST['sexe'], 2);
                        $admin1C = new AdminC();
                        $admin1C->modifierAdmin($admin1);
                        echo "<div class=\"alert alert-success alert-intro\" role=\"alert\">modification reussite</div>";
                        echo "<script> window.location.href='../samples/dashboard-artiste.php'</script>";
                    }
                    ?>
            </div>
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
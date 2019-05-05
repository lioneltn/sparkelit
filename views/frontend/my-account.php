<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mon compte</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">
    
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">

    <!-- Javascript File -->
    <script type="text/javascript" language="javascript" src="assets/js/my-account.js"></script>
</head>
<body>
<?PHP
    include "../../entities/comptes/client.php";
    include "../../core/comptes/clientC.php";

    
    if (isset($_SESSION['email'])) {
        $clientC = new ClientC();
        $result = $clientC->recupererClient($_SESSION['email']);
        foreach ($result as $row) {
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $datenaissance = $row['datenaissance'];
            $sexe = $row['sexe'];
            $password = $row['motdepasse'];
            $tel = $row['tel'];
            $code = $row['codePostal'];
            $addlivr = $row['adresse'];
        }
       
    } else {
        header('Location: login.php');
    }
    ?>
    <div class="page-wrapper">
     <?php 
     include "header2.php" ?>
        
        <main class="main">
            

            <div class="container mt-2">
                <div class="row">
                    <div class="col-lg-9 order-lg-last dashboard-content">
                        <h2>Modifier les informations de son compte</h2>

                        <form method="POST" name="acc_edit">
                            <div class="row">
                                <div class="col-sm-11">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="acc-name">Nom</label>
                                                <input type="text" class="form-control" id="firstName" name="firstName" value="<?PHP echo $nom ?>" onfocusout="validateFirstName(this)" required>
                                            </div><!-- End .form-group -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="acc-lastname">Prénom</label>
                                                <input type="text" class="form-control" id="lastName" name="lastName" value="<?PHP echo $prenom ?>" onfocusout="validateFirstName(this)" required>
                                            </div><!-- End .form-group -->
                                        </div><!-- End .col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .col-sm-11 -->
                            </div><!-- End .row -->

                            <div class="form-group required-field">
                                <label for="acc-birthday">Date de naissance</label>
                                <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" value="<?PHP echo $datenaissance ?>" onfocusout="validateDateNaissance(this)" required>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label for="acc-birthday">Sexe</label>
                                <select name="sexe" class="form-control">
                                    <option value="homme" <?PHP $opt1 = $sexe == "homme" ? "selected" : "";
                                                            $opt2 = $sexe == "femme" ? "selected" : "";
                                                            if ($sexe == " homme") echo $opt1 ?>>Homme </option>
                                    <option value="femme" <?PHP if ($sexe == " femme") echo $opt2 ?>>Femme </option>
                                </select>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label for="acc-email">Email</label>
                                <label class="form-control">
                                    <?PHP echo $_SESSION['email'] ?> </label>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label for="acc-tel">Téléphone</label>
                                <input type="number" class="form-control" id="numTel" name="numTel" value="<?PHP echo $tel ?>" onfocusout="validateNumTel(this)" required>
                            </div><!-- End .form-group -->

                            <div class="required text-right">* Champ requis</div>
                            <div class="form-footer">
                                <a href="dashboard.php"><i class="icon-angle-double-left"></i>précédent</a>

                                <div class="form-footer-right">
                                    <input type="submit" class="btn btn-primary" name="modifier" id="modifier" onclick="verification()" value="modifier">
                                </div>
                            </div><!-- End .form-footer -->
                        </form>
                        <?PHP
                        if (isset($_POST['modifier'])  and isset($_POST['firstName']) and isset($_POST['lastName']) and isset($_POST['dateNaissance']) and isset($_POST['sexe']) and $_POST['dateNaissance'] < "2014-01-01" and $_POST['numTel'] > 10000000) {
                            $client1 = new Client($_POST['firstName'], $_POST['lastName'], $_POST['dateNaissance'], "", $_SESSION['email'], $_POST['sexe'], $_POST['numTel'], "", "", "", "");
                            $client1C = new ClientC();
                            $client1C->modifierClient_i($client1);
                            echo "<div class=\"alert alert-success alert-intro\" role=\"alert\">modification reussite</div>";
                            echo "<script> window.location.href='dashboard.php'</script>";
                        } else {
                            //echo "errorr echec";
                        }
                        ?>
                    </div><!-- End .col-lg-9 -->

                    <aside class="sidebar col-lg-3">
                        <div class="widget widget-dashboard">
                            <h3 class="widget-title">Mon compte</h3>

                            <ul class="list">
                                <li><a href="dashboard.php">Tableau de bord</a></li>
                                <li class="active"><a href="my-account.php">Information sur le compte</a></li>
                                <li><a href="carnet-adresse.php">Carnet d'adresses</a></li>
                                
                            </ul>
                        </div><!-- End .widget -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-5"></div>
        </main><!-- End .main -->

 <?php  
 include "footer2.php" 
 ?>
    </div>

  

    <a id="scroll-top" href="#top" title="Top" role="button"><i>UP</i></a>

 
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>


    <script src="assets/js/main.min.js"></script>
</body>
</html>
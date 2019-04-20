<?PHP 
session_start();
echo $_GET['code'];
$_SESSION['forgot'] = $_GET['code'];
echo $_SESSION['forgot'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="Formulaire.css">


    <!--<link rel="stylesheet" href="../../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">-->
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />

    <!-- Javascript File -->
    <script type="text/javascript" language="javascript" src="../../js/my-account.js">

    </script>

    <title>Mot de passe oublié </title>
</head>

<body>
    
    <div class="container-scroller">

        <!-- partial -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Aide avec le mot de passe</h4>
                <p class="card-description">
                    <strong>Saisissez votre nouveau mot de passe.</strong>
                </p>
                <br>
                <form method="POST" action="newPassword_3.php" class="forms-sample">
                    <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">nouveau mot de passe(8 characters minimum)</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" id="password" placeholder="mot de passe" onfocusout="validatePassword(this)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">confirmer mot de passe</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="mot de passe de confirmation" onfocusout="validateConfirmPassword(this)" required>
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary mr-2" onclick="verification()">Réinitialiser</button>
                </form>
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
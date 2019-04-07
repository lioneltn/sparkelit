<?PHP 
session_start();
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
                    <strong>Saisissez l'adresse e-mail associé à votre compte 5icha. Nous vous enverrons un lien sur cette adresse e-mail pour réinitialiser votre mot de passe.</strong>
                </p>
                <br>
                <form method="POST" action = "forgotPassword.php" class="forms-sample">
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Adresse E-mail</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" onfocusout="validateEmail(this)" required>
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
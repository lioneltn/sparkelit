<?PHP
session_start();
unset ($_SESSION['email']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

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
    <script type="text/javascript" language="javascript" src="assets/js/my-account.js">
    </script>

</head>

<body>
    <div class="page-wrapper">
  <?php 
  include "header2.php" 
  ?>

        <main class="main">
     <br>

            <div class="container">
                <div class="heading mb-4">
                    <h2 class="title">Se connecter</h2>
                    <p></p>
                </div><!-- End .heading -->

                <form id="form" method="POST" onsubmit="return verificationlogin()" action="connexion.php">
                    <div class="form-group required-field">
                        <label for="login">login</label>
                        <input type="email" class="form-control" id="login" name="login" onfocusout="validateEmail(this)" required>
                        <label for="motdepasse">Mot de passe</label>
                        <input type="password" class="form-control" id="motdepasse" name="motdepasse" onfocusout="validatePassword(this)" required>
                    </div><!-- End .form-group -->
                    <a href="forgot-password.php"><label><u>mot de passe oublié ? </u></label></a>
                    <a href="new_account.php"><label><u>Créer un nouveau compte </u></label></a>
                    <br><br>
                    <div class="form-footer">

                    <input type = "submit" class="btn btn-primary" value = "Connexion" onclick="verificationlogin()">
                    </div><!-- End .form-footer -->
                </form>
            </div><!-- End .container -->

            <div class="mb-10"></div><!-- margin -->
        </main><!-- End .main -->

       <?php 
       include "footer2.php" 
       ?>
    </div><!-- End .page-wrapper -->


    <a id="scroll-top" href="#top" title="Top" role="button"><i>UP</i></a>



    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>

</html> 
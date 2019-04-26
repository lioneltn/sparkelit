<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CloudUi Premium Bootstrap Admin Dashboard Template</title>
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
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper auth p-0 theme-two">
        <div class="row d-flex align-items-stretch">
          <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
            <div class="">
            </div>
          </div>
          <div class="col-12 col-md-8 h-100 bg-white">
            <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
              <div class="nav-get-started">
                <p>Already have an account?</p>
                <a class="btn get-started-btn" href="login-2.php">SIGN IN</a>
              </div>
              <form method="POST" action="ajoutArtiste.php" class="forms-sample">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="nom" onfocusout="validateFirstName(this)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Prenom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="prenom" onfocusout="validateFirstName(this)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="acc-birthday" class="col-sm-3 col-form-label">Date de naissance</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" onfocusout="validateDateNaissance(this)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="acc-sexe" class="col-sm-3 col-form-label">Sexe</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="sexe" id="sexe">
                                <option value="homme" selected="selected">Homme </option>
                                <option value="femme">Femme </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="acc-email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" onfocusout = "validateEmail(this)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" id="password" placeholder="mot de passe" onfocusout = "validatePassword(this)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="mot de passe de confirmation" onfocusout = "validateConfirmPassword(this)" required>
                        </div>
                    </div>
                  
                    <br>
                    <button type="submit" class="btn btn-primary mr-2">Créer</button>
                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
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
  <!-- End custom js for this page-->
</body>

</html>
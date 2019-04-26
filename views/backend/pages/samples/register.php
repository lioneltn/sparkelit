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
            <div class="content-wrapper d-flex align-items-center auth theme-one">
                <div class="row w-100 mx-auto">
                    <div class="col-lg-4 mx-auto">
                        <h2 class="text-center mb-4"></h2>
                        <div class="auto-form-wrapper">
                            <form id="example-form" method="POST" action="ajouterAdmin.php">
                                <div>
                                    <h3>Compte</h3>
                                    <section>
                                        <div class="form-group">
                                            <label>Adresse email</label>
                                            <input type="email" class="form-control" aria-describedby="emailHelp" name="email" id="email" placeholder="Enter email" onfocusout="validateEmail(this)" required>
                                            <small id="emailHelp" class="form-text text-muted">Nous n'allons jamais patarger votre email.</small>
                                        </div>
                                        <div class="form-group">
                                            <label>Mot de passe</label>
                                            <input type="password" class="form-control" placeholder="Mot de passe" id="password" name="password" onfocusout="validatePassword(this)" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Mot de passe de confirmation</label>
                                            <input type="password" class="form-control" placeholder="Mot de passe de confirmation" name="confirmPassword" id="confirmPassword" onfocusout="validateConfirmPassword(this)" required>
                                        </div>
                                    </section>
                                    <h3>Profile</h3>
                                    <section>
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="entrer votre nom" onfocusout="validateFirstName(this)" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Prénom</label>
                                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Prénom" onfocusout="validateFirstName(this)" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="acc-birthday">Date de naissance</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" onfocusout="validateDateNaissance(this)" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="acc-sexe">Sexe</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="sexe" id="sexe">
                                                    <option value="homme" selected="selected">Homme </option>
                                                    <option value="femme">Femme </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h6>Terminé</h6>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox">
                                                    Je suis d'accord avec les termes et conditions.
                                                </label>
                                                <br><br>
                                                <button type="submit" class="btn btn-primary mr-2">Terminer</button>
                                            </div>
                                        </div>
                                </div>
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
    <!-- inject:js -->
    <script src="../../js/template.js"></script>
    <!-- endinject -->
</body>

</html> 
<?PHP
session_start();
include "../../entities/comptes/client.php";
include "../../core/comptes/clientC.php";

if (isset($_POST['modifier'])  and isset($_POST['firstName']) and isset($_POST['lastName']) and isset($_POST['dateNaissance']) and isset($_POST['sexe']) and $_POST['dateNaissance'] < "2014-01-01" and $_POST['numTel'] > 10000000) {
    $client1 = new Client($_POST['firstName'], $_POST['lastName'], $_POST['dateNaissance'], "", $_SESSION['email'], $_POST['sexe'], $_POST['numTel'], "", "", "", "");
    $client1C = new ClientC();
    $client1C->modifierClient_i($client1);
    echo "<html><header><title>Confirmation</title><meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
                <title>CloudUi Pre  mium Bootstrap Admin Dashboard Template</title>
                <!-- plugins:css -->
                <link rel=\"stylesheet\" href=\"../backend/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css\">
                <link rel=\"stylesheet\" href=\"../backend/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css\">
                <link rel=\"stylesheet\" href=\"../backend/vendors/css/vendor.bundle.base.css\">
                <link rel=\"stylesheet\" href=\"../backend/vendors/css/vendor.bundle.addons.css\">
                <!-- endinject -->
                <!-- plugin css for this page -->
                <!-- End plugin css for this page -->
                <!-- inject:css -->
                <link rel=\"stylesheet\" href=\"../backend/css/style.css\"></header><body><div class=\"alert alert-success alert-intro\" role=\"alert\">modification reussite</div></body></html>";
    //echo "<div class=\"alert alert-success alert-intro\" role=\"alert\">modification reussite</div>";
    echo "<script> window.location.href='dashboard.php'</script>";
} else {
    echo "<html><header><title>Confirmation</title><meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
                <title>CloudUi Premium Bootstrap Admin Dashboard Template</title>
                <!-- plugins:css -->
                <link rel=\"stylesheet\" href=\"../backend/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css\">
                <link rel=\"stylesheet\" href=\"../backend/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css\">
                <link rel=\"stylesheet\" href=\"../backend/vendors/css/vendor.bundle.base.css\">
                <link rel=\"stylesheet\" href=\"../backend/vendors/css/vendor.bundle.addons.css\">
                <!-- endinject -->
                <!-- plugin css for this page -->
                <!-- End plugin css for this page -->
                <!-- inject:css -->
                <link rel=\"stylesheet\" href=\"../backend/css/style.css\"></header><body><div class=\"alert alert-success alert-intro\" role=\"alert\">echec de la modification</div></body></html>";
    //echo "<div class=\"alert alert-success alert-intro\" role=\"alert\">echec de la modification</div>";
}

?>
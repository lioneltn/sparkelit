<?PHP
session_start();
include "../../config.php";
if (isset($_POST['password']) and isset($_POST['confirmPassword']) and $_POST['password'] == $_POST['confirmPassword']) {
     $sql = "update utilisateur set motdepasse = :mdp where email = :email";
     $db = config::getConnexion();
     try {
          $req = $db->prepare($sql);

          $req->bindValue(':email', $_SESSION['email']);
          $req->bindValue(':mdp', $_POST['password']);
          $req->execute();
          echo "<html><header><title>Confirmation</title><meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
                <title>CloudUi Premium Bootstrap Admin Dashboard Template</title>
                <!-- plugins:css -->
                <link rel=\"stylesheet\" href=\"../../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css\">
                <link rel=\"stylesheet\" href=\"../../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css\">
                <link rel=\"stylesheet\" href=\"../../vendors/css/vendor.bundle.base.css\">
                <link rel=\"stylesheet\" href=\"../../vendors/css/vendor.bundle.addons.css\">
                <!-- endinject -->
                <!-- plugin css for this page -->
                <!-- End plugin css for this page -->
                <!-- inject:css -->
                <link rel=\"stylesheet\" href=\"../../css/style.css\"></header><body><div class=\"alert alert-success alert-intro\" role=\"alert\">Mot de passe changé avec succès</div></body></html>";
     } catch (Exception $e) {
          echo 'Erreur: ' . $e->getMessage();
     }
} else {
     echo "verifier que les mots de passe sont identiques";
}
 
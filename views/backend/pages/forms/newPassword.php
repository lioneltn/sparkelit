<?PHP
session_start();

//print_r($_SESSION);
include "../../../../config.php";
if ($_POST['password'] == $_POST['confirmPassword'] ) {


     $sql = "update utilisateur set motdepasse = :mdp where email = :email";
     $db = config::getConnexion();
     try {
          $req = $db->prepare($sql);

          $req->bindValue(':email', $_SESSION['email_admin']);
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
          <link rel=\"stylesheet\" href=\"../../css/style.css\"></header><body><div class=\"alert alert-success alert-intro\" role=\"alert\">Mot de passe modifié avec succès</div></body></html>";
          //header('Location : ../../index.php');
          echo "<script>window.location.href='../../index.php'</script>";
     } catch (Exception $e) {
          echo 'Erreur: ' . $e->getMessage();
     }
} else {
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
     <link rel=\"stylesheet\" href=\"../../css/style.css\"></header><body><div class=\"alert alert-success alert-intro\" role=\"alert\">verifier que les mots de passe sont identiques</div></body></html>";
     echo "<script>window.location.href='new_password.php'</script>"; 
     //echo "verifier que les mots de passe sont identiques";
}
 
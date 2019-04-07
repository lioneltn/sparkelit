<?PHP
session_start();
include "../../../../entities/comptes/admin.php";
include "../../../../core/comptes/adminC.php";
    $artiste1C = new AdminC();
    $artiste1C->supprimerAdmin($_SESSION['email_artiste']);
    $_SESSION['email_artiste'] = NULL;
    header('Location: register-2.php');
   
?>
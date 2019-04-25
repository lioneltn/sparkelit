<?PHP
session_start();
include "../../../../entities/comptes/admin.php";
include "../../../../core/comptes/adminC.php";
    $artiste1C = new AdminC();
    $artiste1C->supprimerAdmin($_SESSION['email_admin']);
    $_SESSION['email_admin'] = NULL;
    header('Location: register-2.php');
   
?>
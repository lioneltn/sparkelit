<?PHP
session_start();

include "../../../../entities/comptes/admin.php";
include "../../../../core/comptes/adminC.php";

if (isset($_POST['email']) and isset($_POST['password']) and isset($_POST['confirmPassword']) and isset($_POST['firstName']) and isset($_POST['lastName']) and isset($_POST['dateNaissance']) and isset($_POST['sexe'])) {
    $_SESSION['email_admin'] = $_POST['email'];

    $admin1 = new Admin($_POST['firstName'], $_POST['lastName'], $_POST['dateNaissance'], $_POST['password'], $_POST['email'], $_POST['sexe'], 1);
    $admin1C = new AdminC();
    $admin1C->ajouterAdmin($admin1);

    echo $_SESSION['email_admin'];
    header('Location: ../../index.php');

} else {
    echo "vérifier les champs";
 }
 
?>
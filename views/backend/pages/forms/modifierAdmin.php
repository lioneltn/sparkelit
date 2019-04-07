<?PHP
session_start();
include "../../../../entities/comptes/admin.php";
include "../../../../core/comptes/adminC.php";

echo $_SESSION['email'];
if (isset($_SESSION['email'])) {
    $adminC = new AdminC();
    $result = $adminC->recupererAdmin($_SESSION['email']);
    foreach ($result as $row) {
        $_SESSION['nom'] = $row['nom'];
        $_SESSION['prenom'] = $row['prenom'];
        $_SESSION['datenaissance'] = $row['datenaissance'];
        $_SESSION['sexe'] = $row['sexe'];
    }

    if (isset($_POST['modifier'])) {
        $admin1 = new Admin($_POST['firstName'], $_POST['lastName'], $_POST['dateNaissance'], $_POST['password'], $_POST['email'], $_POST['sexe'], 1);
        $admin1C = new AdminC();
        $admin1C->modifierAdmin($admin1, $_SESSION['email_admin']);
        header('Location: modify_account_admin.php');
    }
} else {
    header('Location: login_admin.php');
}
?>
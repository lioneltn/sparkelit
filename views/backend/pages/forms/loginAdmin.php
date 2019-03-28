<?PHP
session_start();

include "../../../../entities/comptes/admin.php";
include "../../../../core/comptes/adminC.php";

if (isset($_POST['email']) and isset($_POST['password'])) {
    
    $password = "";
    $admin1C = new AdminC();
    $result = $admin1C->recupererAdmin($_POST['email']);
    if($result == FALSE) {
        echo "email incorrect";
    } else {
        foreach ($result as $row) {
            $password = $row['motdepasse'];
        }
        if($password != $_POST['password']) {
            echo "email ou mot de passe incorrect ";
        } else {
            echo "email et mot de passe correct ";
            $_SESSION['email_admin'] = $_POST['email'];
            echo $_SESSION['email_admin'];
            header('Location: modify_account_admin.php');
        }
    }
    
    
} else {
    echo "vérifier les champs";
 }
 
?>
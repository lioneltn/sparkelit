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
            $type = $row['type'];
        }
        /*$type = $admin1C->recupererType($_POST['email']);
        foreach ($type as $row) {
            $type = $row['type'];
        }*/
        if($password != $_POST['password']) {
            echo "email ou mot de passe incorrect ";
        } else {
            echo "email et mot de passe correct ";
            if($type == 1) {
                $_SESSION['email_admin'] = $_POST['email'];
            echo $_SESSION['email_admin'];
            header('Location: modify_account_admin.php');
            }
            
            else {
                $_SESSION['email_artiste'] = $_POST['email'];
                echo $_SESSION['email_artiste'];
                header('Location: formulaire_modifier_artiste.php');
            }
            
        }
    }
    
    
} else {
    echo "vérifier les champs";
 }
 
?>
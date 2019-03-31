<?PHP
session_start();
include "../../entities/comptes/client.php";
include "../../core/comptes/clientC.php";

$_SESSION['email'] = $_POST['login'];
$mdp = "";
$client1C = new ClientC();

if (isset($_POST['login']) and isset($_POST['motdepasse'])) {
    echo $_POST['login'] . "&" . $_POST['motdepasse'];
    $result = $client1C->recupererClient($_POST['login']);
    $nbr = $result->rowCount();
    echo $nbr . "rows";
    if ($nbr == 0) {
        echo "   vide ";
        header('Location: login.php');
    } else {
        foreach ($result as $row) {
            $mdp = $row['motdepasse'];
        }
        if ($mdp == $_POST['motdepasse']) { 
            header('Location: index.php');
        } else {
            header('Location: login.php');
        }
    }
} else {
    echo "vérifier les champs";
}
echo $_SESSION['email'];
echo "fin";
 
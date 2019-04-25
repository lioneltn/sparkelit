<?PHP
session_start();
include "../../entities/comptes/client.php";
include "../../core/comptes/clientC.php";



$client1C = new ClientC();

if (isset($_POST['login']) and isset($_POST['motdepasse'])){
    echo $_POST['login'] ."&". $_POST['motdepasse'];
    $result = $client1C->recupererClient($_POST['login']);
    foreach($result as $row) {
        $mdp = $row['motdepasse'];
    }
    if($mdp == $_POST['motdepasse']) {
        $_SESSION['email'] = $_POST['login'];
        header('Location: index.php');
    } else {
        echo "Mot de passe incorrect";
    }
}
	
else{
	echo "vérifier les champs";
}
echo $_SESSION['email'];
echo "fin";
?>
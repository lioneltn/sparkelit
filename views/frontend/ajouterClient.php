<?PHP
session_start();
include "../../entities/comptes/client.php";
include "../../core/comptes/clientC.php";

if (isset($_POST['firstName']) and isset($_POST['lastName']) and isset($_POST['dateNaissance']) and isset($_POST['password']) and isset($_POST['email']) and isset($_POST['sexe']) and isset($_POST['numTel']) and isset($_POST['codePostal']) and isset($_POST['addLivraison']) and isset($_POST['addLivraison_2'])) {
	$_SESSION['email'] = $_POST['email'];

	$client1 = new Client($_POST['firstName'], $_POST['lastName'], $_POST['dateNaissance'], $_POST['password'], $_POST['email'], $_POST['sexe'], $_POST['numTel'], $_POST['region'], $_POST['codePostal'], $_POST['addLivraison'], $_POST['addLivraison_2']);
	$client1C = new ClientC();
	$client1C->ajouterClient($client1);
	echo $_SESSION['email'];
	$_SESSION['new'] = "new";
	header('Location: dashboard.php');
} else {
	echo "vérifier les champs";
}
 
<?PHP
session_start();
/*include "../../entities/comptes/utilisateur.php";
include "../../core/comptes/utilisateurC.php";*/
include "../../entities/comptes/client.php";
include "../../core/comptes/clientC.php";

/*$compte1 = new Utilisateur($client->nom, $client->prenom, $client->dateNaissance, $client->motdepasse, $client->email, $client->sexe);
$compte1C = new UtilisateurC();
$compte1C->ajouterUtilisateur($compte1);*/
$_SESSION['email'] = $_POST['email'];

$client1 = new Client($_POST['firstName'], $_POST['lastName'], $_POST['dateNaissance'], $_POST['password'], $_POST['email'], $_POST['sexe'], $_POST['numTel'], $_POST['codePostal'], $_POST['addLivraison'], $_POST['addLivraison_2']);
$client1C = new ClientC();
$client1C->ajouterClient($client1);
//header('location: afficherCompte.php');
/*
if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['nbH']) and isset($_POST['tarifH'])){
$employe1=new employe($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['nbH'],$_POST['tarifH']);
//Partie2
/*
var_dump($employe1);
}
*/
/*
$employe1C=new EmployeC();
$employe1C->ajouterEmploye($employe1);
header('Location: afficherEmploye.php');
	
}else{
	echo "vérifier les champs";
}*/
echo $_SESSION['email'];
header('Location: my-account.php');
?>
<?PHP
session_start();
include "../../entities/comptes/client.php";
include "../../core/comptes/clientC.php";

$_SESSION['email'] = "arthurwilliam.ngassanguesseu@esprit.tn";
echo $_SESSION['email'];
if (isset($_SESSION['email'])) {
    $clientC = new ClientC();
    $result = $clientC->recupererClient($_SESSION['email']);
    foreach ($result as $row) {
        $_SESSION['nom'] = $row['nom'];
        $_SESSION['prenom'] = $row['prenom'];
        $_SESSION['datenaissance'] = $row['datenaissance'];
        $_SESSION['sexe'] = $row['sexe'];
    }
}
$client1 = new Client($_POST['firstName'], $_POST['lastName'], $_POST['dateNaissance'], $_POST['password'], $_POST['email'], $_POST['sexe'], $_POST['numTel'], $_POST['codePostal'], $_POST['addLivraison'], $_POST['addLivraison_2']);
$client1C = new ClientC();
$client1C->modifierClient($client1);

if (isset($_POST['modifier'])){
	$employe=new employe($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['nbH'],$_POST['tarifH']);
	$employeC->modifierEmploye($employe,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherEmploye.php');
}
?>
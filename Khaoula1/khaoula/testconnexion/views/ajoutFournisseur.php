<?PHP
chdir(__DIR__);
include "../entities/fournisseur.php";
include "../core/fournisseurC.php";

if (isset($_POST['reference']) and isset($_POST['pays']) and isset($_POST['ville']) and isset($_POST['region']) and isset($_POST['email']) and isset($_POST['numero']))
{
	$fournisseur=new Fournisseur($_POST['reference'],$_POST['ville'],$_POST['pays'],$_POST['region'],$_POST['email'],$_POST['numero']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$fournisseurC=new FournisseurC();
$fournisseurC->ajouterFournisseur($fournisseur);
//header('Location: afficherCategorie.php');
	
}
else
{
	echo "vérifier les champs";
}
//*/

?>
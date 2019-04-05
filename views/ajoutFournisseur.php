<?PHP
chdir(__DIR__);
include "../entities/fournisseur.php";
chdir(__DIR__);
include "../core/fournisseurC.php";
chdir(__DIR__);

	$fournisseur=new Fournisseur($_POST['reference'],$_POST['ville'],$_POST['pays'],$_POST['region'],$_POST['email'],$_POST['numero']);
$fournisseurC=new FournisseurC();
$ajout=true;
try
{
	$fournisseurC->ajouterFournisseur($fournisseur);
}
catch (Exception $e)
{
	$ajout=false;
	header('Location: backend/pages/AjoutFournisseurErreur.php');
}
if($ajout)
{
	header('Location: backend/pages/AjoutFournisseurok.php');
}
	

//*/

?>
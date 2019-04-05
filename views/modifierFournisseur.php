<?PHP
chdir(__DIR__);
include "../entities/fournisseur.php";
include "../core/fournisseurC.php";
chdir(__DIR__);
$fournisseur1=new Fournisseur($_POST['reference'],$_POST['ville'],$_POST['pays'],$_POST['region'],$_POST['email'],$_POST['numero']);
$fournisseur1C=new FournisseurC();
$modifier=true;
try
{
	$fournisseur1C->modifierFournisseur($fournisseur1);
}
catch (Exception $e)
{
	$modifier=false;
	header('Location: backend/pages/ModifierFournisseurErreur.php');

}
if($modifier)
{
	header('Location: backend/pages/ModifierFournisseurOk.php');
}
?>
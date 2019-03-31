<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
$categorie1=new Categorie($_POST['nom'],$_POST['type']);
$categorie1C=new CategorieC();
$modifier=true;
try
{
	$categorie1C->modifierCategorie($categorie1,$_POST['anciennom']);
}
catch (Exception $e)
{
	$modifier=false;
	header('Location: backend/pages/ModifierCategorieErreur.php');

}
if($modifier)
{
	header('Location: backend/pages/ModifierCategorieOk.php');
}
?>
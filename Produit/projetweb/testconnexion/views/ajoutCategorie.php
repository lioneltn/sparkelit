<?PHP
chdir(__DIR__);

include "../entities/categorie.php";
include "../core/categorieC.php";

chdir(__DIR__);

if (isset($_POST['nom']) and isset($_POST['type']))
{
	$categorie1=new Categorie($_POST['nom'],$_POST['type']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$categorie1C=new CategorieC();
$ajout=true;
try
{
	$categorie1C->ajouterCategorie($categorie1);
}
catch (Exception $e)
{
	$ajout=false;
    header('location:backend/pages/AjoutCategorieErreur.php');
       echo 'Erreur: '.$e->getMessage();
}
if($ajout)
{
	header('Location: backend/pages/AjoutCategoriok.php');
}	
}
else
{
	echo "vérifier les champs";
}
//*/

?>
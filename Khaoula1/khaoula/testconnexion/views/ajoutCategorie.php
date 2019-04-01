<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";

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
$categorie1C->ajouterCategorie($categorie1);
header('Location: afficherCategorie.php');
	
}
else
{
	echo "vérifier les champs";
}
//*/

?>
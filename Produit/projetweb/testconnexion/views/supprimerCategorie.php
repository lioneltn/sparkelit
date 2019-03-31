<?PHP
chdir(__DIR__);
include "../core/categorieC.php";
chdir(__DIR__);
include "../core/produitC.php";
chdir(__DIR__);
$categorieC= new CategorieC();
$produitC= new ProduitC();
$listeproduit=$produitC->afficherProduitsparCategorie($_POST['nom']);
foreach ($listeproduit as $row) 
{
	$produitC->supprimerDetailsParRef($row['reference']);
	$produitC->supprimerProduitParRef($row['reference']);
}
$categorieC->supprimerCategorie($_POST['nom']);
header('location:backend/pages/afficherCategorie.php');
?>
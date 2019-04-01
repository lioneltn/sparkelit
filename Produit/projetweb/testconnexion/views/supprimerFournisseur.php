<?PHP
chdir(__DIR__);
include "../core/fournisseurC.php";
chdir(__DIR__);
include "../core/produitC.php";
chdir(__DIR__);
$fournisseurC= new FournisseurC();
$produitC= new ProduitC();
$listeproduit=$produitC->afficherProduitsparFournisseur($_POST['reference']);
foreach ($listeproduit as $row) 
{
	$produitC->supprimerDetailsParRef($row['reference']);
	$produitC->supprimerProduitParRef($row['reference']);
}
$fournisseurC->supprimerFournisseur($_POST['reference']);
header('location:backend/pages/afficherFournisseur.php');
?>
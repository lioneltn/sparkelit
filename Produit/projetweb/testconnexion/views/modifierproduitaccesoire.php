<?PHP
chdir(__DIR__);
include "../entities/produit.php";
include "../core/produitC.php";
chdir(__DIR__);
$disponible=array('jpg','jpeg','png','gif');
$produitC=new ProduitC();
$ajout=true;
if(empty($_FILES['image']['name'])==false)
{
	$file=$_FILES['image'];


	print_r($file);
	

	$filename=$file['name'];
	$filetmp=$file['tmp_name'];

	$ext=explode('.', $filename);
	$extension=strtolower(end($ext));
	if(in_array($extension,$disponible))
	{
		$destination="uploads/".$filename;
		move_uploaded_file($filetmp, $destination);
		$produit=new Produit($_POST['nom'],$_POST['description'],$_POST['type'],$_POST['fournisseur'],$_POST['categorie'],$destination,$_POST['prix'],$_POST['reference'],$_POST['quantite']);
		try 
		{
			$produitC-> modifierProduits($produit);
		} 
		catch (Exception $e) 
		{
			$ajout=false;	
		}
		
	}
	else
	{
		echo "Verifier l'extension";
		$ajout=false;
	}
}
else
{
	$produit=new Produit($_POST['nom'],$_POST['description'],$_POST['type'],$_POST['fournisseur'],$_POST['categorie'],NULL,$_POST['prix'],$_POST['reference'],$_POST['quantite']);
	try 
	{
		$produitC-> modifierProduitssansimage($produit);
	} 
	catch (Exception $e) 
	{
		$ajout=false;
	}
		
}
if($ajout)
{
	$produitC->supprimerDetailsParRef($_POST['reference']);
	header('Location: backend/pages/ModifierProduitAccessoiresOk.php');
}
else
{
	header('Location: backend/pages/ModifierProduitAccessoiresErreur.php');
}

?>
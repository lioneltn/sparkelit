<?PHP
chdir(__DIR__);
include "../entities/produit.php";
include "../core/produitC.php";
	$file=$_FILES['image'];

	$disponible=array('jpg','jpeg','png','gif');

	$filename=$file['name'];
	$filetmp=$file['tmp_name'];

	$ext=explode('.', $filename);
	$extension=strtolower(end($ext));


	if (in_array($extension,$disponible))
	{

		$destination="uploads/".$filename;
		echo "<br>".getcwd()."<br>";
		chdir(__DIR__);
		move_uploaded_file($filetmp, $destination);
		$produit=new Produit($_POST['nom'],$_POST['description'],$_POST['type'],$_POST['fournisseur'],$_POST['categorie'],$destination,$_POST['prix'],$_POST['reference'],$_POST['quantite']);
		$produitc=new ProduitC();
		$ajout=true;
		try 
		{
			$produitc->ajouterProduitaccesoire($produit);
		} 
		catch (Exception $e)
		{
			$ajout=false;
			header('Location: backend/pages/AjouterproduitAccesoireErreur.php');
		}
		if($ajout)
		{
			header('Location: backend/pages/AjouterproduitAccesoireOk.php');
		}


	}
	else
	{
		header('Location: backend/pages/AjouterproduitAccessoireErreur.php');
	}

	//$fournisseur=new Fournisseur($_POST['reference'],$_POST['ville'],$_POST['pays'],$_POST['region'],$_POST['email'],$_POST['numero']);

//Partie3
//$fournisseurC=new FournisseurC();
//$fournisseurC->ajouterFournisseur($fournisseur);
//header('Location: afficherCategorie.php');
	
?>
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


	$file1=$_FILES['image1'];

	$filename1=$file1['name'];
	$filetmp1=$file1['tmp_name'];

	$ext1=explode('.', $filename1);
	$extension1=strtolower(end($ext1));



	$file2=$_FILES['image2'];


	$filename2=$file2['name'];
	$filetmp2=$file2['tmp_name'];

	$ext2=explode('.', $filename2);
	$extension2=strtolower(end($ext2));



	$file3=$_FILES['image3'];


	$filename3=$file3['name'];
	$filetmp3=$file3['tmp_name'];

	$ext3=explode('.', $filename3);
	$extension3=strtolower(end($ext3));



	$file4=$_FILES['image4'];



	$filename4=$file4['name'];
	$filetmp4=$file4['tmp_name'];


	$ext4=explode('.', $filename4);
	$extension4=strtolower(end($ext4));

	if (in_array($extension,$disponible) and in_array($extension1,$disponible) and in_array($extension2,$disponible) and in_array($extension3,$disponible) and in_array($extension4,$disponible))
	{

		$destination="uploads/".$filename;
		$destination1="uploads/".$filename1;
		$destination2="uploads/".$filename2;
		$destination3="uploads/".$filename3;
		$destination4="uploads/".$filename4;
		echo "<br>".getcwd()."<br>";
		chdir(__DIR__);
		move_uploaded_file($filetmp, $destination);
		move_uploaded_file($filetmp1, $destination1);
		move_uploaded_file($filetmp2, $destination2);
		move_uploaded_file($filetmp3, $destination3);
		move_uploaded_file($filetmp4, $destination4);
		$details=array(
			array("Rouge",$_POST['Tailles1'],$_POST['Taillem1'],$_POST['Taillel1'],$_POST['Taillexl1']),
			array("Vert",$_POST['Tailles2'],$_POST['Taillem2'],$_POST['Taillel2'],$_POST['Taillexl2']),
			array("Bleu",$_POST['Tailles3'],$_POST['Taillem3'],$_POST['Taillel3'],$_POST['Taillexl3']),
			array("jaune",$_POST['Tailles4'],$_POST['Taillem4'],$_POST['Taillel4'],$_POST['Taillexl4'])
		);
		$produit=new Produit($_POST['nom'],$_POST['description'],$_POST['type'],$_POST['fournisseur'],$_POST['categorie'],$destination,$_POST['prix'],$_POST['reference'],NULL);
		$ajout=true;
		$produitc=new ProduitC();
		try
		{
			$produitc->ajouterProduit($produit);
		}
		catch (Exception $e)
		{
			$ajout=false;
			header('Location: backend/pages/AjoutProduitErreur.php');

		}
		if($ajout)
		{

			for ($i = 0; $i<4; $i++)
			{
				for ( $j = 1; $j < 5; $j++ )
				{
					switch ($j) 
					{
						case 1:
							$taille="small";
							break;
						
						case 2:
							$taille="Meduim";
							break;

						case 3:
							$taille="Large";
							break;
						
						case 4:
							$taille="XtraLarge";
							break;
					}
					switch ($i) 
					{
						case 0:
							$destinationloop=$destination1;
							break;
						
						case 1:
							$destinationloop=$destination2;
							break;
						case 2:
							$destinationloop=$destination3;
							break;
						case 3:
							$destinationloop=$destination4;
							break;
					}
					echo "<br"."taille=".$taille."<br"."couleur=".$details[$i][0]."<br>"."quantite=".$details[$i][$j]."destination=".$destinationloop."<br"."ref=".$_POST['reference']."<br>";
					$produitc->ajouterDetails($taille,$details[$i][0],$details[$i][$j],$destinationloop,$_POST['reference']);
					header('Location: backend/pages/AjoutProduitOk.php');

				}
			}
		}

	}
	else
	{
		header('Location: backend/pages/AjoutProduitErreur.php');
	}

	//$fournisseur=new Fournisseur($_POST['reference'],$_POST['ville'],$_POST['pays'],$_POST['region'],$_POST['email'],$_POST['numero']);

//Partie3
//$fournisseurC=new FournisseurC();
//$fournisseurC->ajouterFournisseur($fournisseur);
//header('Location: afficherCategorie.php');
	
?>
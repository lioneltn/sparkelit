<?PHP
chdir(__DIR__);
include "../entities/produit.php";
include "../core/produitC.php";
chdir(__DIR__);
$disponible=array('jpg','jpeg','png','gif');
$produitC=new ProduitC();
$liste=$produitC->afficherProduitParRef($_POST['reference']);
$produitancien=new Produit($liste['nom'],$liste['description'],$liste['type'],$liste['fournisseur'],$liste['categorie'],$liste['thumbnail'],$liste['prix'],$liste['reference'],$liste['quantite']);
$listedetails=$produitC->afficherDetailsParRef($_POST["reference"]);
$ajout=true;
if(empty($_FILES['image']['name'])==false)
{
	$file=$_FILES['image'];

	

	$filename=$file['name'];
	$filetmp=$file['tmp_name'];

	$ext=explode('.', $filename);
	$extension=strtolower(end($ext));
	
	if(in_array($extension,$disponible))
	{
		$destination="uploads/".$filename;
		move_uploaded_file($filetmp, $destination);
		
		$produit=new Produit($_POST['nom'],$_POST['description'],$_POST['type'],$_POST['fournisseur'],$_POST['categorie'],$destination,$_POST['prix'],$_POST['reference'],NULL);
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
	$produit=new Produit($_POST['nom'],$_POST['description'],$_POST['type'],$_POST['fournisseur'],$_POST['categorie'],NULL,$_POST['prix'],$_POST['reference'],NULL);
		try 
		{
			$produitC-> modifierProduitssansimage($produit);
			
		} 
		catch (Exception $e) 
		{
			$ajout=false;	
		}
}

$totalliste=$produitC->nombreDeDetails($_POST['reference']);
$total=$totalliste['Total'];
if ($total!=0) 
{

	if(empty($_FILES['image1']['name'])==false)
	{

		$file1=$_FILES['image1'];

		$filename1=$file1['name'];
		$filetmp1=$file1['tmp_name'];

		$ext1=explode('.', $filename1);
		$extension1=strtolower(end($ext1));
		if(in_array($extension1,$disponible))
		{
			$destination1="uploads/".$filename1;
			move_uploaded_file($filetmp1, $destination1);
			$produitC->modifierDetails("small","Rouge",$_POST['Tailles1'],$destination1,$_POST['reference']);
			$produitC->modifierDetails("Meduim","Rouge",$_POST['Taillem1'],$destination1,$_POST['reference']);
			$produitC->modifierDetails("Large","Rouge",$_POST['Taillel1'],$destination1,$_POST['reference']);
			$produitC->modifierDetails("XtraLarge","Rouge",$_POST['Taillexl1'],$destination1,$_POST['reference']);
		}
		else
		{
			echo "Verifier l'extension";
			$ajout=false;
		}

	}
	else
	{
		echo "image1empty";

			$produitC->modifierDetailssansimage("small","Rouge",$_POST['Tailles1'],$_POST['reference']);
			$produitC->modifierDetailssansimage("Meduim","Rouge",$_POST['Taillem1'],$_POST['reference']);
			$produitC->modifierDetailssansimage("Large","Rouge",$_POST['Taillel1'],$_POST['reference']);
			$produitC->modifierDetailssansimage("XtraLarge","Rouge",$_POST['Taillexl1'],$_POST['reference']);
	}

	if(empty($_FILES['image2']['name'])==false)
	{
		$file2=$_FILES['image2'];


		$filename2=$file2['name'];
		$filetmp2=$file2['tmp_name'];

		$ext2=explode('.', $filename2);
		$extension2=strtolower(end($ext2));
		if(in_array($extension2,$disponible))
		{
			$destination2="uploads/".$filename2;
			move_uploaded_file($filetmp2, $destination2);
			$produitC->modifierDetails("small","Vert",$_POST['Tailles2'],$destination2,$_POST['reference']);
			$produitC->modifierDetails("Meduim","Vert",$_POST['Taillem2'],$destination2,$_POST['reference']);
			$produitC->modifierDetails("Large","Vert",$_POST['Taillel2'],$destination2,$_POST['reference']);
			$produitC->modifierDetails("XtraLarge","Vert",$_POST['Taillexl2'],$destination2,$_POST['reference']);
		}
		else
		{
			echo "Verifier l'extension";
			$ajout=false;
		}

	}
	else
	{
			$produitC->modifierDetailssansimage("small","Vert",$_POST['Tailles2'],$_POST['reference']);
			$produitC->modifierDetailssansimage("Meduim","Vert",$_POST['Taillem2'],$_POST['reference']);
			$produitC->modifierDetailssansimage("Large","Vert",$_POST['Taillel2'],$_POST['reference']);
			$produitC->modifierDetailssansimage("XtraLarge","Vert",$_POST['Taillexl2'],$_POST['reference']);
	}

	if(empty($_FILES['image3']['name'])==false)
	{

		$file3=$_FILES['image3'];


		$filename3=$file3['name'];
		$filetmp3=$file3['tmp_name'];

		$ext3=explode('.', $filename3);
		$extension3=strtolower(end($ext3));
		if(in_array($extension3,$disponible))
		{
			$destination3="uploads/".$filename3;
			move_uploaded_file($filetmp3, $destination3);
			$produitC->modifierDetails("small","Bleu",$_POST['Tailles3'],$destination3,$_POST['reference']);
			$produitC->modifierDetails("Meduim","Bleu",$_POST['Taillem3'],$destination3,$_POST['reference']);
			$produitC->modifierDetails("Large","Bleu",$_POST['Taillel3'],$destination3,$_POST['reference']);
			$produitC->modifierDetails("XtraLarge","Bleu",$_POST['Taillexl3'],$destination3,$_POST['reference']);
		}
		else
		{
			echo "Verifier l'extension";
			$ajout=false;
		}
	
	}
	else
	{
			$produitC->modifierDetailssansimage("small","Blue",$_POST['Tailles3'],$_POST['reference']);
			$produitC->modifierDetailssansimage("Meduim","Blue",$_POST['Taillem3'],$_POST['reference']);
			$produitC->modifierDetailssansimage("Large","Blue",$_POST['Taillel3'],$_POST['reference']);
			$produitC->modifierDetailssansimage("XtraLarge","Blue",$_POST['Taillexl3'],$_POST['reference']);
	}
	
	if(empty($_FILES['image4']['name'])==false)
	{

		$file4=$_FILES['image4'];
		$filename4=$file4['name'];
		$filetmp4=$file4['tmp_name'];
	
	
		$ext4=explode('.', $filename4);
		$extension4=strtolower(end($ext4));
		if(in_array($extension4,$disponible))
		{
			$destination4="uploads/".$filename4;
			move_uploaded_file($filetmp4, $destination4);
			$produitC->modifierDetails("small","jaune",$_POST['Tailles4'],$destination4,$_POST['reference']);
			$produitC->modifierDetails("Meduim","jaune",$_POST['Taillem4'],$destination4,$_POST['reference']);
			$produitC->modifierDetails("Large","jaune",$_POST['Taillel4'],$destination4,$_POST['reference']);
			$produitC->modifierDetails("XtraLarge","jaune",$_POST['Taillexl4'],$destination4,$_POST['reference']);
		}
		else
		{
			echo "Verifier l'extension";
			$ajout=false;
		}
	
	}
	else
	{
			$produitC->modifierDetailssansimage("small","jaune",$_POST['Tailles4'],$_POST['reference']);
			$produitC->modifierDetailssansimage("Meduim","jaune",$_POST['Taillem4'],$_POST['reference']);
			$produitC->modifierDetailssansimage("Large","jaune",$_POST['Taillel4'],$_POST['reference']);
			$produitC->modifierDetailssansimage("XtraLarge","jaune",$_POST['Taillexl4'],$_POST['reference']);
	}
}
else
{
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

	if (in_array($extension1,$disponible) and in_array($extension2,$disponible) and in_array($extension3,$disponible) and in_array($extension4,$disponible))
	{

		$destination1="uploads/".$filename1;
		$destination2="uploads/".$filename2;
		$destination3="uploads/".$filename3;
		$destination4="uploads/".$filename4;
		chdir(__DIR__);
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
		$produitc=new ProduitC();
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
				/*echo "<br"."taille=".$taille."<br"."couleur=".$details[$i][0]."<br>"."quantite=".$details[$i][$j]."destination=".$destinationloop."<br"."ref=".$_POST['reference']."<br>";*/
				$produitc->ajouterDetails($taille,$details[$i][0],$details[$i][$j],$destinationloop,$_POST['reference']);
				//header('Location: backend/pages/afficherProduits.php');

			}
		}

	}
	else
	{
		$ajout=false;
	}
}
if($ajout)
{
	header('Location: backend/pages/ModifierProduitOk.php');
}
else
{
	$produitC->modifierProduits($produitancien);
	foreach ($listedetails as $row)
	{
		$produitC->modifierDetails($row['taille'],$row['couleur'],$row['quantite'],$row['image'],$row['ref_produit']);
	}
	header('Location: backend/pages/ModifierProduitErreur.php');
}
//header('Location: backend/pages/afficherProduits.php');
	
?>
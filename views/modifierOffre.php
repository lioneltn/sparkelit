<?PHP
chdir(__DIR__);
include "../entities/offre.php";
include "../core/offreC.php";

$file=$_FILES['image'];

	$disponible=array('jpg','jpeg','png','gif');

	$filename=$file['name'];
	$filetmp=$file['tmp_name'];

	$ext=explode('.', $filename);
	$extension=strtolower(end($ext));


if (isset($_POST['id']))
{
	$offreC=new OffreC();
    $result=$offreC->recupererOffre($_POST['id']);
	foreach($result as $row)
	   {
		$id=$row['id'];
		$nom=$row['nom'];
		$descripition=$row['descripition'];
		$refP=$row['refP'];
		$prix=$row['prix'];
		$prix_anc=$row['prix_anc'];
		$image=$row['image'];
		$remise=$row['remise'];
		$dateD=$row['dateD'];
		$dateF=$row['dateF'];

		}

}
if (isset($_POST['modifier']))
	{ 
		$destination="uploads/".$filename;
   echo $_POST['id'];
	$offre1=new offre($_POST['id'],$_POST['nom'],$_POST['desc'],$_POST['refP'],$_POST['prix'],$_POST['prix_anc'],$destination,$_POST['remise'],$_POST['dateD'] ,$_POST['dateF']);
	$offre1C=new OffreC();
	$offre1C->modifierOffre($offre1,$_POST['id']);
	//echo $_POST["ref"];
	header('Location:backend/pages/afficherOffres.php');
}

?>





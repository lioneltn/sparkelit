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
		$idSlider=$row['idSlider'];
		$descripition=$row['descripition'];
		$refP=$row['refP'];
		$prix=$row['prix'];
		$prix_anc=$row['prix_anc'];
		$image=$row['image'];
		}

}
if (isset($_POST['modifier']))
	{ 
		$destination="uploads/".$filename;
   echo $_POST['id'];
	$offre1=new offre($_POST['id'],$_POST['nom'],$_POST['idSlider'],$_POST['desc'],$_POST['refP'],$_POST['prix'],$_POST['prix_anc'],
		$destination);
	$offre1C=new OffreC();
	$offre1C->modifierOffre($offre1,$_POST['id']);
	echo $_POST["ref"];
	header('Location:backend/pages/afficherOffres.php');
}

?>





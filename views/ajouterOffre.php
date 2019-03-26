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
//print_r($file);

if (in_array($extension,$disponible)) // tester si existe ou pas
	{

		$destination="uploads/".$filename;
		
		
		move_uploaded_file($filetmp, $destination);

        $offre=new Offre($_POST['id'],$_POST['nom'],$_POST['idSlider'],$_POST['desc'],$_POST['refP'],$destination,$_POST['prix'],$_POST['prix_anc'],);
		$offrec=new OffreC();
		$offrec->ajouterOffre($offre);
		header('Location: backend/pages/afficherOffres.php');


	}
/*if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['idSlider']) and isset($_POST['desc']) and isset($_POST['refP']))
{
	$offre=new Offre($_POST['id'],$_POST['nom'],$_POST['idSlider'],$_POST['desc'],$_POST['refP'],$file['name']);

$offreC=new OffreC();
$offreC->ajouterOffre($offre);
header('Location: backend/pages/ajouterOffre.php');
	
}*/
else
{
	echo "vérifier les champs";
}
//*/

?>
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
   


if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['desc']) and isset($_POST['prix']) and isset($_POST['prix_anc'])and isset($_FILES['image']) and isset($_POST['remise']) and isset($_POST['dateD']) and isset($_POST['dateF']) and in_array($extension,$disponible))
   {

        $destination="uploads/".$filename;

        $offre=new Offre($_POST['id'],$_POST['nom'],$_POST['desc'],$_POST['refP'],$_POST['prix'],$_POST['prix_anc'],$_POST['remise'],$destination,$_POST['dateD'],$_POST['dateF']);
		$offrec=new OffreC();
		$offrec->ajouterOffre($offre);
		$offrec->calculerPrix($offre);
		header('Location: backend/pages/afficherOffres.php');
echo "aaaa";

	}

else
{
	echo "vérifier les champs";
}
//*/

?>
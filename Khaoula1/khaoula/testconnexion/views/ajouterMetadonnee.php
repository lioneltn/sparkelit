<?PHP
chdir(__DIR__);
include "../entities/metadonnee.php";
include "../core/metadonneeC.php";

$file=$_FILES['logo'];

	$disponible=array('jpg','jpeg','png','gif');

	$filename=$file['name'];
	$filetmp=$file['tmp_name'];

	$ext=explode('.', $filename);
	$extension=strtolower(end($ext));
   


if (isset($_POST['ref']) and isset($_POST['desc']) and in_array($extension,$disponible) )
   {

        $destination="meta/".$filename;

        $metadonnee=new Metadonnee($_POST['ref'],$_POST['desc'],$destination);
		$metadonneeC=new MetadonneeC();
		$metadonneeC->ajouterMetadonnee($metadonnee);
		header('Location: backend/pages/afficherMetadonnee.php');


	}

else
{
	echo "vérifier les champs";
}
//*/

?>
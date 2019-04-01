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


if (isset($_POST['ref']))
{
	$metadonneeC=new MetadonneeC();
    $result=$metadonneeC->recupererMetadonnee($_POST['ref']);
	foreach($result as $row)
	   {
		$ref=$row['reference'];
		$desc=$row['descripition'];
		$logo=$row['logo'];
		
		}

}
if (isset($_POST['modifier']))
	{ 
		$destination="meta/".$filename;
   echo $_POST['ref'];

	$metadonnee1=new Metadonnee($_POST['ref'],$_POST['desc'],$destination);
	$metadonnee1C=new MetadonneeC();
	$metadonnee1C->modifierMetadonnee($metadonnee1,$_POST['ref']);

	echo $_POST["ref"];
	header('Location:backend/pages/afficherMetadonnee.php');
}

?>




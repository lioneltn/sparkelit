

<?PHP
//echo "hello";
//print_r($_POST);
$file=$_FILES['image'];
//print_r($file);
chdir(__DIR__);
include "../entities/offre.php";
include "../core/offreC.php";



	

if (isset($_POST['modifier']))
{
	$offre=new offre($_POST['id'],$_POST['nom'],$_POST['idSlider'],$_POST['desc'],$_POST['refP'],$_POST['image']);
	$offreC->modifierOffre($offre,$_POST['id_ini']);
	echo $_POST['id_ini'];
	echo "jawik behi";
	header('Location: backend/pages/afficherOffres.php');
	
}
else {
	echo "nn bb ";
}
?>

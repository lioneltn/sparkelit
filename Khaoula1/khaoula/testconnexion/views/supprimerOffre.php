<?PHP
include "../core/offreC.php";
$offreC=new OffreC();
if (isset($_POST["id"]))
{
	$offreC->supprimerOffre($_POST["id"]);
	header('Location: backend/pages/afficherOffres.php');
}

 				
?>

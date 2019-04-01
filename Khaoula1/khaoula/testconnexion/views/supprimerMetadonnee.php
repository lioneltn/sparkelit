<?PHP
include "../core/metadonneeC.php";

$metadonneeC=new MetadonneeC();
if (isset($_POST["ref"]))
{
	$metadonneeC->supprimerMetadonnee($_POST["ref"]);
	//confirm("Etes vous sur de supprimer cet article?");
	header('Location: backend/pages/afficherMetadonnee.php');
}

?>
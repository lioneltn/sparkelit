<?PHP
include "../core/sliderC.php";
$sliderC=new SliderC();
if (isset($_POST["ref"]))
{
	$sliderC->supprimerSlider($_POST["ref"]);
	//confirm("Etes vous sur de supprimer cet article?");
	header('Location: backend/pages/afficherSlider.php');
}

?>
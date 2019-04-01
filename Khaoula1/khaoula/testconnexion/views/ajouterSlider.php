<?PHP
include "../entities/slider.php";
include "../core/sliderC.php";

if (isset($_POST['ref']) and isset($_POST['nom']))
{
	$slider=new Slider($_POST['ref'],$_POST['nom']);
		$sliderc=new SliderC();
		$sliderc->ajouterSlider($slider);
		header('Location: backend/pages/afficherSlider.php');
	
}
else
{
	echo "vérifier les champs";
}
//*/

?>
<?PHP
chdir(__DIR__);
include "../entities/slider.php";
include "../core/sliderC.php";

//echo $_POST["ref"];

if (isset($_POST['ref']))
{
	$sliderC=new SliderC();
    $result=$sliderC->recupererSlider($_POST['ref']);
	foreach($result as $row)
	   {
		$ref=$row['ref'];
		$nom=$row['nom'];
		
		}

}
if (isset($_POST['modifier']))
	
{ 
		
	$slider1=new slider($_POST['ref'],$_POST['nom']);
	$slider1C=new SliderC();
	$slider1C->modifierSlider($slider1,$_POST['ref']);
	
header('Location:backend/pages/afficherSlider.php');

	
}

?>

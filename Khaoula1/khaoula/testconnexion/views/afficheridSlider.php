<?PHP
chdir(__DIR__);
include "../core/sliderC.php";

$sliderC=new SliderC();
$liste=$sliderC->afficherRefSlider();

?>
<select class="form-control" name="idSlider">

<?PHP
foreach($liste as $row){
echo"<option value='".$row['ref']."'>".$row['ref']."</option>";
}
?>
</select>
<?PHP
chdir(__DIR__);
include "../core/offreC.php";

$offreC=new OffreC();
$listeOffre=$offreC-> afficherIdOffre();

//var_dump($listeEmployes->fetchAll());

?>
<select class="form-control" name="id">;


<?PHP

foreach($listeOffre as $row)

{

echo"<option value='".$row['id']."'>".$row['id']."</option>";
}
?>
</select>

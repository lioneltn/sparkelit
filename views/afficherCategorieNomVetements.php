<?PHP
chdir(__DIR__);
include "../core/categorieC.php";

$categorie1C=new CategorieC();
$listeCategorie=$categorie1C->afficherCategoriesNomVetements();

//var_dump($listeEmployes->fetchAll());
?>
<select class="form-control" name="categorie">

<?PHP
foreach($listeCategorie as $row){
echo"<option value='".$row['nom']."'>".$row['nom']."</option>";
}
?>
</select>



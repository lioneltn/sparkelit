<?PHP
include "../core/categorieC.php";
$categorie1C=new CategorieC();

$listeCategorie=$categorie1C->afficherCategories();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Nom</td>
<td>Type</td>
</tr>

<?PHP
foreach($listeCategorie as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<?PHP
}
?>
</table>



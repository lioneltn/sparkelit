<?php 
include "../core/postecore.php";

$p= new posteC();
$ret=$p->typeadmin("5"); 
$type=$ret['type'];
if ($type ==2)
{    $liste=$p->afficherposte_pourartiste("5");
?>
 		 <table border="1">
			<tr>
<td>id</td>
<td>titre</td>
<td>description</td>
<td>image</td>
<td>date</td>
<td>id_a</td>
<td>Modifier</td>
</tr>

<?PHP
foreach($liste as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_poste']; ?></td>
	<td><?PHP echo $row['titre']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><?PHP echo $row['image']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['id_admin']; ?></td>
	<td><input type="button" name="">Modifier</td>
	</tr>
	<?php 
}
?>
</table>
	 
<?php
}
else
 	{
 		 $liste=$p->afficherposte_pouradmin();
 ?>
 		 <table border="1">
			<tr>
<td>id</td>
<td>titre</td>
<td>description</td>
<td>image</td>
<td>date</td>
<td>id_a</td>
<td>Modifier</td>
</tr>

<?PHP
foreach($liste as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_poste']; ?></td>
	<td><?PHP echo $row['titre']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><?PHP echo $row['image']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['id_admin']; ?></td>
	<td><input type="button" name="">Modifier</td>
	</tr>
	<?php 
}
?>
</table>

<?php 
 } 
?>
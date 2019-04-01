<?PHP
include "../core/CommandeC.php";
$commande1C=new CommandeC();
$commande=new Commande(12,45," paye","22/23/25","papa","par cheque");
$commande1C-> modifierCommande($commande,12);
//$commande1C->supprimerCommande(13);

$listeCommande=$commande1C->afficherCommande();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>totalPaiement</td>
<td>etat</td>
<td>dates</td>
<td>client</td>
<td>modePaiement</td>
</tr>

<?PHP
foreach($listeCommande as $row){
	?>
	<tr>
	<td><?PHP echo $row['idCommande']; ?></td>
	<td><?PHP echo $row['totalPaiement']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['client']; ?></td>
	<td><?PHP echo $row['modePaiement']; ?></td>
	<td><button>modifier</button></td>
	<?PHP
}
?>
</table>



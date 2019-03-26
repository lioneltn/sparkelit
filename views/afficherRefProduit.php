<?PHP
chdir(__DIR__);
include "../core/produitC.php";

$produitC=new ProduitC();
$listeProduit=$produitC->afficherRefProduit();

//var_dump($listeEmployes->fetchAll());
?>
<select class="form-control" name="reference">

<?PHP
foreach($listeProduit as $row){
echo"<option value='".$row['reference']."'>".$row['reference']."</option>";
}
?>
</select>

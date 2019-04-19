<?PHP
chdir(__DIR__);
include "../core/produitC.php";

$produitC=new ProduitC();
$listeProduit=$produitC->afficherRefProduit();

?>
<select class="form-control" name="refP">

<?PHP
foreach($listeProduit as $row){
echo"<option value='".$row['reference']."'>".$row['reference']."</option>";
}
?>
</select>

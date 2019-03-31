<?PHP
chdir(__DIR__);
include "../core/fournisseurC.php";

$fournisseurC=new FournisseurC();
$listeFournisseur=$fournisseurC->afficherFournisseurRef();

//var_dump($listeEmployes->fetchAll());
?>
<select class="form-control" name="fournisseur">

<?PHP
foreach($listeFournisseur as $row){
echo"<option value='".$row['reference']."'>".$row['reference']."</option>";
}
?>
</select>

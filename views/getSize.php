<?php 
chdir(__DIR__);
include "../entities/produit.php";
include "../core/produitC.php";


if (isset($_GET['ref'] , $_GET['color'])){
	$ref=$_GET['ref'];
	$color=$_GET['color'];

    $produit1C=new ProduitC();
    $sizes=$produit1C->afficherSizes($ref,$color);


?>

<style type="text/css">
	  .flex-container {
  display: flex;
  flex-wrap: wrap;
	}
</style>
<div class="flex-container">
<?php

    foreach($sizes as $size){
    	$i=0;
?>
    	 <div>
            <input type="radio" name="option-<?php echo $i ?>" value="<?php echo $size['taille'] ?>">
            <label for="option-<?php echo $i ?>"><?php echo $size['taille'] ?></label>
		</div>

	<?php 
	$i=$i+1;	
    }
     

        
}

?>

</div>


 
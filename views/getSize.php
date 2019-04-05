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
<!DOCTYPE html>
<html>
<head>
	<!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>
<body>

</body>
</html>

<style type="text/css">
	  .flex-container {
  display: flex;
  flex-wrap: wrap;
	}

.config-size-list  label {
    position: relative;
    display: block;
    min-width: 2.6rem;
    height: 2.6rem;
    transition: all .3s;
    padding-left: .2rem;
    padding-right: .2rem;
    font-weight: 400;
    text-align: center;
    font-size: 1.3rem;
    line-height: 2.4rem;
    border: 1px solid #dae2e6;
    background-color: #e9e9e9;
    text-decoration: none;
    color: #7a7d82;
}

.config-size-list  label:hover {
    color: #fff;
    border-color: #29363c;
    background-color: #29363c;
    text-decoration: none;
}

.config-size-list  label.active {
    color: #fff;
    border-color: #29363c;
    background-color: #29363c;
}
}
</style>
<div class="flex-container widget-body">
<?php

    foreach($sizes as $size){
    	$i=0;
?>
    	 
    	 	<div class="config-size-list">
            <input hidden type="radio" name="option-<?php echo $i ?>" value="<?php echo $size['taille'] ?>">
            <label class="" for="option-<?php echo $i ?>" ><?php echo $size['taille'] ?></label>
            </div>
		

	<?php 
	$i=$i+1;	
    }
     

        
}

?>

</div>


 
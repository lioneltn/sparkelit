<?php 
chdir(__DIR__);
include "../entities/produit.php";
include "../core/produitC.php";


if (isset($_GET['query'])){
	$query=$_GET['query'];
	

    $produit1C=new ProduitC();

    $liste=$produit1C->search($query);


    foreach($liste as $row){
    	echo "Hello";
    }
}
?>
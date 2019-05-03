<?php 
include "../../core/PanierC.php";
echo $_POST["image"];
 echo $_POST["prix"];
 echo $_POST["quantite"];
 echo $_POST["couleur"];
echo "oui";

if(!empty($_POST["image"]) && !empty($_POST["prix"])  && !empty($_POST["quantite"]) && !empty($_POST["couleur"])){
   extract($_POST);
    $produitPanier=new ProduitPanier($image,$quantite,$couleur,$prix);
    produitPanierC::ajouterProduitPanier($produitPanier);
    
}

?>
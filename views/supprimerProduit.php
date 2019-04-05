<?php
chdir(__DIR__);
include "../entities/produit.php";
include "../core/produitC.php";
chdir(__DIR__);
$produitC=new ProduitC();
$produitC->supprimerDetailsParRef($_POST['reference']);
$produitC->supprimerProduitParRef($_POST['reference']);
header('Location: backend/pages/afficherProduits.php');
?>
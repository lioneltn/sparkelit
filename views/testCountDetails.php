<?php
chdir(__DIR__);
include "../entities/produit.php";
include "../core/produitC.php";
$p= new produitC();
$totalliste=$p->nombreDeDetails("ac9");
$total=$totalliste['Total'];
echo $total;
echo "<br>";
if ($total != 0)
{
	echo "remplie";
}
else
{
	echo "vide";
}
?>
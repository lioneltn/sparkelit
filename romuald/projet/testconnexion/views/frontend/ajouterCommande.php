<?php 
include "../../core/CommandeC.php";
include "../../core/Commande.php";
 echo $_POST["modeDePaiment"];
if(((!empty($_POST["idPanier"]) && !empty($_POST["totalPaiement"])) && (!empty($_POST["etat"]) && !empty($_POST["date"])) && !empty($_POST["login"])) && !empty($_POST["modeDePaiment"]))
{
//    extract($_POST);
    echo "armand";
	$commande=new Commande($_POST["totalPaiement"],$_POST["etat"],$_POST["date"],$_POST["login"],$_POST["modeDePaiment"],$_POST["idPanier"]);
    $commandeC=new commandeC();
    $commandeC->ajouterCommande($commande);
    

}
?>

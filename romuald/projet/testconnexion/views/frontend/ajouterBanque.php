<?php 
include "../../core/BanqueC.php";

echo $_POST["expirationMonth"];
if(!empty($_POST["cardName"]) && !empty($_POST["cardNumber"]) && !empty($_POST["expirationMonth"]) && !empty($_POST["expirationYear"]) && !empty($_POST["CVV"]) && !empty($_POST["login"]))
{
    echo "c'est bon";
    extract($_POST);
	$banque=new Banque($cardName,$cardNumber,$expirationMonth,$expirationYear,$CVV,$login);
   
    $banqueC=new BanqueC();
    $banqueC->ajouterBanque($banque);
    echo "oui";

}
?>

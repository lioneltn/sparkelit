<?php 
include "../../core/PanierC.php";
echo "oui";
 print_r($_POST["image2"]);
print_r($_POST["quantite"]);

if(!empty($_POST["image2"]) && !empty($_POST["quantite"])){
    produitPanierC::modifier($_POST["quantite"],$_POST["image2"]);
}
?>
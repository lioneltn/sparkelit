<?php 
include "../../core/PanierC.php";
        echo $_POST["image"].'<br>';
echo "oui";
if(!empty($_POST["image"])){
    produitPanierC::supprimerPanier($_POST["image"]);
    echo "cela a fonctionne";
}
?>

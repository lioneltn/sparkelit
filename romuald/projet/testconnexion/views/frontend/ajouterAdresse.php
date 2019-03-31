<?php 
include "../../core/AdresseC.php";
        echo $_POST["adresse"].'<br>';
echo $_POST["ville"].'<br>';
echo $_POST["pays"].'<br>';
echo $_POST["codePostal"].'<br>';
echo $_POST["tel"].'<br>';
echo $_POST["region"].'<br>';
echo $_POST["login"].'<br>';
echo $_POST["companie"].'<br>';
if(!empty($_POST["adresse"]) && !empty($_POST["ville"]) && !empty($_POST["pays"]) && !empty($_POST["codePostal"]) && !empty($_POST["tel"]) && !empty($_POST["region"]) && !empty($_POST["login"]) && !empty($_POST["companie"]))
{


    extract($_POST);
	$adresse=new Adresse($adresse,$ville,$pays,$codePostal,$tel,$region,$login,$companie);
   
    $adresseC=new AdresseC();
    $adresseC->ajouterAdresse($adresse);

}
?>

<?php 

include "../core/postecore.php";
$p= new posteC();

$p->supprimerposte_id($_POST['id']);
header('location:backend/pages/forms/afficherpostadmin.php');


 ?>
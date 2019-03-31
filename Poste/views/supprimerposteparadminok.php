<?php 

include "../core/postecore.php";
chdir(__DIR__);
include "../core/notecore.php";

$p= new posteC();
$m= new noteC();

$m->supprimernoteposte($_POST['id']);
$p->supprimerposte_id($_POST['id']);
header('location:backend/pages/forms/afficherpostadmin.php');


 ?>
<?php 
include "../core/notecore.php";
include "../core/postecore.php";
chdir(__DIR__);
$p= new posteC();
$n= new noteC();
$n->supprimernoteposte($_POST['id']);
$p->supprimerposte_id($_POST['id']);
header('location:backend/pages/forms/afficherpostadmin.php');


 ?>
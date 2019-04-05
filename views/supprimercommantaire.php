<?php
chdir(__DIR__);
include "../core/notecore.php";
include "../core/postecore.php";
chdir(__DIR__);
$p= new noteC();
$poste= new posteC();

$p->supprimernote($_POST['client'],$_POST['post'] );
$moy1=$p->moyennenote($_POST['post']);
$moy=$moy1['moyenne'];
$poste->modifier_note($_POST['post'],$moy);
header('location:backend/pages/forms/afficherpostadmin.php');

?>
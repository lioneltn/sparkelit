<?php 
chdir(__DIR__);
 
include "../entities/note.php";
include "../core/notecore.php";
include "../core/postecore.php";
chdir(__DIR__);
print_r($_POST);

$note=new Note($_POST['commentaire'],$_POST['note'],$_POST['id_client'],$_POST['id_poste']);
$noteC=new noteC();
$posteC=new posteC();

$nb1=$noteC->nbnoteclientetposte($_POST['id_poste'],$_POST['id_client']);

$nb=$nb1['total'];
if($nb==0)
{
	$noteC->ajouternote($note);
}
else
{
	$noteC->modifierclientetposte($_POST['id_poste'],$_POST['id_client'],$_POST['note'],$_POST['commentaire']);

}
$moy1=$noteC->moyennenote($_POST['id_poste']);
$moy=$moy1['moyenne'];
$posteC->modifier_note($_POST['id_poste'],$moy);
header('location:frontend/blog.php');

 ?>
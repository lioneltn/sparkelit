<?php 
 chdir(__DIR__);
 session_start();
include "../entities/poste.php";
include "../core/postecore.php";

if ($_FILES['image']['name'])
{
	$file=$_FILES['image'];
	$filename=$file['name'];
	$filetmp=$file['tmp_name'];
	$filesize=$file['size'];
	$ext=explode('.', $filename);
	$extension=strtolower(end($ext));
	$disponible=array('jpg','jpeg','png','gif');
	if(in_array($extension,$disponible))
	{
		chdir(__DIR__);
		$destination="upload/".$filename;
		move_uploaded_file($filetmp,$destination);
		$poste1=new poste($_POST['titre'],$_POST['description'],$destination,$_SESSION['email_admin']);
		$poste1C=new posteC();
		$poste1C->modifier_poste($poste1,$_POST["id"]);
		header('location:backend/pages/forms/afficherpostadmin.php');
     }
}
else
{
	$poste1=new poste($_POST['titre'],$_POST['description'],$_POST["chemin"],$_SESSION['email_admin']);
		$poste1C=new posteC();
		$poste1C->modifier_poste($poste1,$_POST["id"]);
		header('location:backend/pages/forms/afficherpostadmin.php');
}

 ?>
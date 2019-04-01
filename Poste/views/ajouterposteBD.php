<?php 
chdir(__DIR__);
include "../entities/poste.php";
include "../core/postecore.php";

if (isset($_POST['titre']) and isset($_POST['description']))
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
		echo $destination;
		echo $filetmp;
		move_uploaded_file($filetmp,$destination);
		$poste1=new poste($_POST['titre'],$_POST['description'],$destination,"4");
		$poste1C=new posteC();
		$poste1C->ajouterposte($poste1);
		header('location:backend/pages/forms/afficherpostadmin.php');
     }
 } 
 ?>    

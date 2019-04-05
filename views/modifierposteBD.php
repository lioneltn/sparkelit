<?php 
 chdir(__DIR__);
include "../entities/poste.php";
include "../core/postecore.php";
echo($_FILES['image']['name']);
if ($_FILES['image']['name'])
{
	echo "1";
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
		$poste1=new poste($_POST['titre'],$_POST['description'],$destination,"5");
		$poste1C=new posteC();
		$poste1C->modifier_poste($poste1,$_POST["id"]);
		header('location:backend/pages/forms/afficherpostadmin.php');
     }
}
else
{
	echo "2";
	$poste1=new poste($_POST['titre'],$_POST['description'],$_POST["chemin"],"5");
		$poste1C=new posteC();
		$poste1C->modifier_poste($poste1,$_POST["id"]);
		header('location:backend/pages/forms/afficherpostadmin.php');
}

 ?>
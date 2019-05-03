<?php 
chdir(__DIR__);

$note= new noteC();
$liste = $note->affichercommantaire ($_POST['id']);
$nb1=$note->nombrecommantaire($_POST['id']);
$nb=$nb1['total'];
if($nb==0)
{
	?>
	<p style="padding-top: 10px;padding-bottom:  10px; font-size: 25px;word-wrap: break-word;">Pas de commantaires!</p>
<?php
}
else
{
	foreach ( $liste as $row ) 

	{
		 ?>
		 <div style=" border: solid 1.5px; border-radius: 20px; font-size: 20px ; word-wrap: break-word;padding: 10px; margin: 20px">
		 	<p><?php echo $row['prenom']."  ".$row["nom"];?><span>:</span> </p>
		 	<?php echo $row['commantaire'];?> 
		 </div>
		 <?php 
	}
}

 ?>
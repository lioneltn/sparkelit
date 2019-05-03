<?php 
chdir(__DIR__);
include "../core/notecore.php";
chdir(__DIR__);


$note = new noteC();
$liste=$note->affichercommantaireback($_POST["id"]);

$nb1=$note->nombrenote($_POST["id"]);
$nb=$nb1['total'];
if($nb==0)
{ ?>
	<p style="padding-top: 10px;padding-bottom:  10px; font-size: 25px;word-wrap: break-word;">Aucun commantaire pour l'instant <br>Lorsque des personnes commante votre poste, leur nom et leur commantaire s'affiche ici!</p>

	<?php
}
else
{
			foreach ($liste as $row)
			{
				?>

				<div style=" border: solid 1.5px; border-radius: 20px; font-size: 20px ; word-wrap: break-word;padding: 10px; margin: 20px">
		 	<p> Client : <?php echo $row['id_client'];?></p>
		 	<p> Note : <?php echo $row['note'];?></p>
		 	<p>Commantaire : <?php echo $row['commantaire'];?></p>
		 
		
		 	<form action="../../../supprimercommantaire.php" method="POST" >
		 		<input type="hidden" name="post" value="<?php echo $row['id_poste'];?>">
		 		<input type="hidden" name="client" value="<?php echo $row['id_client'];?>">
		 		<input type="submit" value="Supprimer" class="btn btn-danger mr-2">
		 		
		 	</form>

		 </div>
				<?php


			}

}

 ?>
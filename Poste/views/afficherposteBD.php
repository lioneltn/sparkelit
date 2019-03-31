<?php 
chdir(__DIR__);
include "../entities/poste.php";
include "../core/postecore.php";
	$poste1C=new posteC();
		$ret=$poste1C->typeadmin("4"); 
		$type=$ret['type'];
		if ($type ==2)   
		{
		 	$liste=$poste1C->afficherposte_pourartiste("4");
?>

<style type="text/css">
	.seyedfoul
	{
		background-color: red ;
		width: 100px;
		overflow: scroll ;
	}

</style>
 		 	<table id="sortable-table-2" class="table table-striped">
				<thead>
                          <tr>
                            <th class="sortStyle">Titre</th>
                            <th class="sortStyle">Note<i onclick="trieNote()" class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Description</th>
                            <th class="sortStyle">image</th>
                            <th class="sortStyle">date<i onclick="trieDate()" class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Id_admin</th>
                            <th class="sortStyle">Modification</th>
                            <th class="sortStyle">Suppression</th>
                            <th class="sortStyle">Commantaire</th>
                          </tr>
                </thead>
                <tbody>
				<?PHP
				foreach($liste as $row)
				{
				?>
					<tr>
					<td name="titre"><?PHP echo $row['titre'];?></td>
					<td name="note"><?PHP echo $row['note']; ?></td>
					<td ><div style=" max-width: 300px; "><p style="overflow: hidden;word-wrap: break-word;  "><?PHP echo $row['description']; ?></p></div></td>
					<td name="image"><img width="100px" height="100px " src="<?php echo '../../../'.$row['image'];?>"></td>
					<td name="date"><?PHP echo $row['date']; ?></td>
					<td name="id_a"><?PHP echo $row['id_admin']; ?></td>
					<td>
					<form method="POST" action="formulaire_modifier_poste.php">
						<input type="hidden" name="id" value="<?PHP echo $row['id_poste']; ?>" readonly>
						<input type="submit" value="Modifier" class="btn btn-primary mr-2">
					</form>
					</td>
					<td>
					<form method="POST" action="afficherpostadminpop1.php">
						<input type="hidden" name="id" value="<?PHP echo $row['id_poste']; ?>" readonly>
						<input type="hidden" name="titre" value="<?PHP echo $row['titre']; ?>" readonly>
						<input type="submit" value="Supprimer" class="btn btn-danger mr-2">
					</form>
					</td>
					<td>
					<form method="POST" action="affichercommantaireback.php">
						<input type="hidden" name="id" value="<?PHP echo $row['id_poste']; ?>" readonly>
						<input type="submit" value="Afficher" class="btn btn-warning mr-2">
					</form>
					</td>
					</tr>
					<?php 
				}
					?>
				</tbody>
			</table>
	 
			<?php
		}
		else
 		{
 		 	$liste=$poste1C->afficherposte_pouradmin();
 			?>
 		 	<table id="sortable-table-2" class="table table-striped">
				<thead>
                          <tr>
                            
                            <th class="sortStyle">Titre</th>
                            <th class="sortStyle">Note<i class="icon-arrow-down" onclick="trieNote()"></i></th>
                            <th class="sortStyle">Description</th>
                            <th class="sortStyle">Image</th>
                            <th class="sortStyle">Date<i class="icon-arrow-down" onclick="trieDate()"></i></th>
                            <th class="sortStyle">Id_admin</th>
                            <th class="sortStyle">Modification</th>
                            <th class="sortStyle">Suppression</th>
                            <th class="sortStyle">Commantaire</th>
                          </tr>
                </thead>
                <tbody>
			<?PHP
			foreach($liste as $row)
			{
			?>  
				<tr>
				<td><?PHP echo $row['titre']; ?></td>
				<td name="note"><?PHP echo $row['note']; ?></td>
				<td ><div style=" max-width: 300px; "><p style="overflow: hidden;word-wrap: break-word;  "><?PHP echo $row['description']; ?></p></div></td>
				<td><img width="100px" height="100px " src="<?php echo '../../../'.$row['image'];?>"></td>
				<td><?PHP echo $row['date']; ?></td>
				<td><?PHP echo $row['id_admin']; ?></td>
				<td>
					<form method="POST" action="formulaire_modifier_poste.php">
						<input type="hidden" name="id" value="<?PHP echo $row['id_poste']; ?>" readonly>
						<input type="submit" value="Modifier" class="btn btn-primary mr-2">
					</form>
				</td>
				<td>
					<form method="POST" action="afficherpostadminpop1.php">
						<input type="hidden" name="id" value="<?PHP echo $row['id_poste']; ?>" readonly>
						<input type="hidden" name="titre" value="<?PHP echo $row['titre']; ?>" readonly>
						<input type="submit" value="Supprimer" class="btn btn-danger mr-2">
					</form>
				</td>
				<td>
					<form method="POST" action="affichercommantaireback.php">
						<input type="hidden" name="id" value="<?PHP echo $row['id_poste']; ?>" readonly>
						<input type="submit" value="Afficher" class="btn btn-warning mr-2">
					</form>
					</td>
				</tr>
				<?php 
			}
				?>
				</tbody>
			</table>

		<?php 
		 }
		 ?>
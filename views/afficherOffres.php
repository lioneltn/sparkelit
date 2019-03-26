<?php 
chdir(__DIR__);
include "../entities/offre.php";
include "../core/offreC.php";
	$offreC=new OffreC();
	$liste=$offreC->afficherOffre();
		
?>

 		 	<table id="sortable-table-2" class="table table-striped">
				<thead>
                          <tr>
                            <th class="sortStyle">ID<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Descripition<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Nom<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">IDSlider<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Reference du Produit<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Prix de soldet<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Prix ancien<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Image<i class="icon-arrow-down"></i></th>
                            
                          </tr>
                </thead>
                <tbody>
				<?PHP
				foreach($liste as $row)
				{
				?>
					<tr>
					<td name="id"><?PHP echo $row['id']; ?></td>
					<td name="desc"><?PHP echo $row['descripition']; ?></td>
					<td name="nom"><?PHP echo $row['nom']; ?></td>
					<td name="idSlider"><?PHP echo $row['idSlider']; ?></td>
					<td name="refP"><?PHP echo $row['refP']; ?></td>
					<td name="prix"><?PHP echo $row['prix']; ?></td>
					<td name="prix_anc"><?PHP echo $row['prix_anc']; ?></td>
					<td name="image"><img width="200px" height="200px "  src= "<?php echo '../../'.$row['image'];?>"></td>
					</tr>
					<?php 
				}
					?>
				</tbody>
			</table>
	
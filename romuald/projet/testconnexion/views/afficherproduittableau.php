<?php 
chdir(__DIR__);
include "../entities/produit.php";
include "../core/produitC.php";
	$produit1C=new ProduitC();
	$liste=$produit1C->afficherProduits();
		
?>

 		 	<table id="sortable-table-2" class="table table-striped">
				<thead>
                          <tr>
                            <th class="sortStyle">Nom<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Description<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Type<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Fournisseur<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Categorie<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Thumbnail<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Prix<i class="icon-arrow-down"></i></th>
                          </tr>
                </thead>
                <tbody>
				<?PHP
				foreach($liste as $row)
				{
				?>
					<tr>
					<form method="POST" action="modifierproduit.php">
					<input type="hidden" name="reference" value="<?PHP echo $row['reference']; ?>" readonly>
					<td name="Nom"><?PHP echo $row['nom']; ?></td>
					<td name="description"><?PHP echo $row['description']; ?></td>
					<td name="type"><?PHP echo $row['type']; ?></td>
					<td name="fournisseur"><?PHP echo $row['fournisseur']; ?></td>
					<td name="categorie"><?PHP echo $row['categorie']; ?></td>
					<td name="thumbnail"><img width="200px" height="200px "  src="<?php echo '../../'.$row['thumbnail'];?>"></td>
					<td name="Prix"><?PHP echo $row['prix']; ?></td>
					<td><input type="submit" value="Modifier" class="btn btn-primary mr-2"></td>
					</form>
					</tr>
					<?php 
				}
					?>
				</tbody>
			</table>
	
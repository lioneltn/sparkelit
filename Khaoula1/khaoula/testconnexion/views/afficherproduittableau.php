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
                          	<th class="sortStyle">Reference</th>
                            <th class="sortStyle">Nom<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Description<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Type<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Fournisseur<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Categorie<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Thumbnail<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Prix<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Modifier</th>
                            <th class="sortStyle">Supprimer</th>
                          </tr>
                </thead>
                <tbody>
				<?PHP
				foreach($liste as $row)
				{
				?>
					<tr>
						<td name="Nom"><?PHP echo $row['reference']; ?></td>
						<td name="Nom"><?PHP echo $row['nom']; ?></td>
						<td name="description"><?PHP echo $row['description']; ?></td>
						<td name="type"><?PHP echo $row['type']; ?></td>
						<td name="fournisseur"><?PHP echo $row['fournisseur']; ?></td>
						<td name="categorie"><?PHP echo $row['categorie']; ?></td>
						<td name="thumbnail"><img width="200px" height="200px "  src="<?php echo '../../'.$row['thumbnail'];?>"></td>
						<td name="Prix"><?PHP echo $row['prix']; ?></td>
						<td>
							<form method="POST" action="modifierproduit.php">
								<input type="hidden" name="reference" value="<?PHP echo $row['reference']; ?>" readonly>
								<input type="submit" value="Modifier" class="btn btn-primary mr-2">
							</form>
						</td>
						<td>
							<form method="POST" action="afficherProduitspopup.php">
								<input type="hidden" class="hiddenreference" name="reference" value="<?PHP echo $row['reference']; ?>" readonly >
								<input type="submit" value="Supprimer" class="btn btn-danger mr-2">
							</form>
						</td>
					</tr>
					<?php 
				}
					?>
				</tbody>
			</table>


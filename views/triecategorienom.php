<?php 
chdir(__DIR__);
include "../entities/categorie.php";
include "../core/categorieC.php";
include "../entities/produit.php";
include "../core/produitC.php";
chdir(__DIR__);
	$categorieC=new CategorieC();
	$liste=$categorieC->trieCategorienom();
	$produitC=new ProduitC();
	
?>

 		 	<table id="sortable-table-2" class="table table-striped">
				<thead>
                          <tr>
                            <th class="sortStyle">Nom<i class="icon-arrow-down" onclick="trienom()"></i></th>
                            <th class="sortStyle">Type<i class="icon-arrow-down" onclick="trietype()"></i></th>
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
						<td name="Nom"><?PHP echo $row['nom']; ?></td>
						<td name="type"><?PHP echo $row['type']; ?></td>
						<td>
						<?php
						$nb1=$produitC->nombreDeProduitsparCategorie($row['nom']);
						$nb=$nb1['Total']; 
						if($nb==0) 
						{
							?>
							<form method="POST" action="modifiercategorie.php">
								<input type="hidden" name="nom" value="<?PHP echo $row['nom']; ?>" readonly>
								<input type="submit" value="Modifier" class="btn btn-primary mr-2">
							</form>

						<?php
						}
						else
						{
						?>
							<form method="POST" action="modifiercategorie.php">
								<input type="hidden" name="nom" value="<?PHP echo $row['nom']; ?>" readonly>
								<input type="submit" value="Modifier" class="btn btn-primary mr-2" disabled>
							</form>
						<?php 
						} 
						?>
						</td>
						<td>
							<form method="POST" action="afficherCategoriepopup.php">
								<input type="hidden" class="hiddenreference" name="nom" value="<?PHP echo $row['nom']; ?>" readonly >
								<input type="submit" value="Supprimer" class="btn btn-danger mr-2">
							</form>
						</td>
					</tr>
					<?php 
				}
					?>
				</tbody>
			</table>



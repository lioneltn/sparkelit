<?php 
chdir(__DIR__);
include "../entities/fournisseur.php";
include "../core/fournisseurC.php";
include "../entities/produit.php";
include "../core/produitC.php";
chdir(__DIR__);
	$fournisseurC=new FournisseurC();
	$liste=$fournisseurC->afficherFournisseur();
	$produitC=new ProduitC();
	
?>

 		 	<table id="sortable-table-2" class="table table-striped">
				<thead>
                          <tr>
                            <th class="sortStyle">Nom<i class="icon-arrow-down" onclick="trienom()"></i></th>
                            <th class="sortStyle">Pays<i class="icon-arrow-down" onclick="triepays()"></i></th>
                            <th class="sortStyle">Region<i class="icon-arrow-down" onclick="trieregion()"></i></th>
                            <th class="sortStyle">Ville<i class="icon-arrow-down" onclick="trieville()"></i></th>
                            <th class="sortStyle">Email<i class="icon-arrow-down" onclick="trieemail()"></i></th>
                            <th class="sortStyle">Numero<i class="icon-arrow-down" onclick="trienumero()"></i></th>
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
						<td name="reference"><?PHP echo $row['reference']; ?></td>
						<td name="pays"><?PHP echo $row['pays']; ?></td>
						<td name="ville"><?PHP echo $row['ville']; ?></td>
						<td name="region"><?PHP echo $row['region']; ?></td>
						<td name="email"><?PHP echo $row['email']; ?></td>
						<td name="numero"><?PHP echo $row['numero']; ?></td>
						<td>
						<?php
						$nb1=$produitC->nombreDeProduitsparFournisseur($row['reference']);
						$nb=$nb1['Total']; 
						if($nb==0) 
						{
							?>
							<form method="POST" action="modifierfournisseur.php">
								<input type="hidden" name="reference" value="<?PHP echo $row['reference']; ?>" readonly>
								<input type="submit" value="Modifier" class="btn btn-primary mr-2">
							</form>

						<?php
						}
						else
						{
						?>
							<form method="POST" action="modifierfournisseur.php">
								<input type="hidden" name="reference" value="<?PHP echo $row['reference']; ?>" readonly>
								<input type="submit" value="Modifier" class="btn btn-primary mr-2">
							</form>
						<?php 
						} 
						?>
						</td>
						<td>
							<form method="POST" action="afficherFournisseurpopup.php">
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



<?php 
chdir(__DIR__);
include "../entities/offre.php";
include "../core/offreC.php";


	$offreC=new OffreC();
	$liste=$offreC->afficherOffre();
		

 		 	
                
				
				foreach($liste as $row)
				{
				?>
					<tr>
					
					<td name="nom"> <?php echo $row['nom'];?></td> 					
					</tr>
					<?php 
				}

				
					?>
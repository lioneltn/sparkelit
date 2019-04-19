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
					
					<td name="image"> <img  src="<?php echo '../'.$row['image'];?>" alt="<?php echo ''.$row['descripition'];?>"></td> 					
					</tr>
					<?php 
				}

				
					?>

					<!--<?PHP
				if (isset($terme))
                {
             $terme = strtolower($terme);
             $offreC=new OffreC();
             $liste=$offreC->chercherOffres($terme);

 //$offreC->chercherOffres($terme);

			}

					?>-->
				
<?php 
chdir(__DIR__);
include "../entities/offre.php";
include "../core/offreC.php";


	$offreC=new OffreC();
	$liste=$offreC->afficherOffre();
		

 		 	
                
				
				foreach($liste as $row)
				{
				?>
					
					<img  src="<?php echo '../'.$row['image'];?>">	

						
              
					<?php 
				}

				
					?>

			
				
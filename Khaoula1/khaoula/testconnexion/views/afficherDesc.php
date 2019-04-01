<?php 
chdir(__DIR__);
include "../entities/offre.php";
include "../core/offreC.php";


	$offreC=new OffreC();
	$liste=$offreC->afficherOffre();
		?>

 		 	<div class="home-slide-content container">
                            <div class="slide-text"> <br>
                              
                           

             <?php    
				
				foreach($liste as $row)
				{
				?>
					<tr>
					
					<td name="desc"><?PHP echo $row['descripition']; ?></br>
					<td>						
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
				
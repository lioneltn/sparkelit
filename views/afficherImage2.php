 <?php 
chdir(__DIR__);
include "../entities/offre.php";
include "../core/offreC.php";


    $offreC=new OffreC();
    $liste=$offreC->afficherOffre();
        

            
                
                
                foreach($liste as $row)
                {
                    $prix=($row["prix_anc"]*$row["remise"])/100;
                ?>                   
                    <div class="home-slide">
                            <div class="slide-bg owl-lazy" data-src="../<?php echo $row['image'];?>"></div><!-- End .slide-bg -->

                            <div class="home-slide-content container">
                                <div class="slide-text"><br>
                                    <div>
                                        <span class="slide-sale"><?php echo $row['remise'];?></span>
                                        <span>
                                            <span class="slide-perc">%</span><br>
                                            OFF
                                        </span>
                                    </div>
                                </div>
                                <h1><?php echo $row['nom'];?></h1>
                                <h3>Nouveau prix: <strong><?php echo $prix;?>Dt</strong></h3>
                                <form action="product.php" method="POST">
                                    <input type="hidden" name="ref" value="<?php echo $row['refP']?>">
                                    <input type="Submit" class="btn btn-primary" value="Shop Now">
                                </form>
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .home-slide -->
                <?php 
                } 
                ?>
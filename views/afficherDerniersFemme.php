<?php

chdir(__DIR__);

$listeP=$produitC->afficherDerniers("Femme");
foreach ($listeP as $row) 
{
?>

								<div class="product">
                                    <figure style="max-height: 246px;max-width: 222px;"class="product-image-container">
                                            <img style="width:222px;height: 246px" src="../<?php echo $row['thumbnail'];?>" alt="product">
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <p><?php echo $row['nom'];?></p>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price"><?php echo $row['prix'];?>Dt</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <form action="product.php" method="POST">
					                            <input type="hidden" name="ref" value="<?php echo $row['reference']?>">
					                            <button type="submit" class="paction add-cart" value="Add to Cart"><span>Afficher Produit</span></button>
					                        </form>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

<?php	
}
?>
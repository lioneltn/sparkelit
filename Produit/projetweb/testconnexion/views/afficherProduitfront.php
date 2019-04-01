<?php 
chdir(__DIR__);
include "../entities/produit.php";
include "../core/produitC.php";
    $produit1C=new ProduitC();
    $liste=$produit1C->afficherProduits();
        
?>
<?PHP
foreach($liste as $row)
{
?>
    <div class="col-6 col-md-4 ">
        <div  class="product">
            <figure style=" max-width: 222px;max-height:246px; transform: translate(-50%,0px);position: relative;left:50%;" class="product-image-container">
                <div  class="product-image">
                    <img  style="width: 222px;height: 246px;" src="../<?php echo $row['thumbnail'];?>" alt="product">
                </div>
                                                        
            </figure>
             <div class="product-details">
                <h2 class="product-title">
                    <p><?php echo $row['nom'];?></p>
                </h2>
                <div class="price-box">
                    <span class="product-price"><?php echo $row['prix'];?>Dt</span>
                </div><!-- End .price-box -->

                <div class="product-action">
                    <?php 
                    if($row['type']=="Accesoire")
                    {
                    ?>
                        <form action="product.php" method="POST">
                            <input type="hidden" name="ref" value="<?php echo $row['reference']?>">
                            <button type="submit" class="paction add-cart" value="Add to Cart"><span>Ajouter au panier</span></button>
                        </form>
                    <?php 
                    }
                    else
                    {
                    ?>
                        <form action="product.php" method="POST">
                            <input type="hidden" name="ref" value="<?php echo $row['reference']?>">
                            <button type="submit" class="paction add-cart" value="Add to Cart"><span>Ajouter au panier</span></button>
                        </form>
                    <?php 
                    }
                    ?>
                </div><!-- End .product-action -->
             </div><!-- End .product-details -->
        </div><!-- End .product -->
    </div><!-- End .col-md-4 -->

<?php 
}
?>
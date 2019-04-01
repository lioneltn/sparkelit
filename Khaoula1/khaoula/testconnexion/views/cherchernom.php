<?php 
chdir(__DIR__);
include "../entities/offre.php";
include "../core/offreC.php";


  $offreC=new OffreC();
  $liste=$offreC->RechercherParRef($_GET['recherche']);    
?>

      <table id="sortable-table-2" class="table table-striped">
        <thead>
                          <tr>
                            <th class="sortStyle">ID<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Nom<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">IDSlider<i class="icon-arrow-down"></i></th>
                             <th class="sortStyle">Descripition<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Reference du Produit<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Prix de solde<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Prix ancien<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Image<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Modifier</th>
                            <th class="sortStyle">Supprimer</th>
                            <td>
              
            </td>
                          </tr>
                </thead>
                <tbody>
        <?PHP
        foreach($liste as $row)
        {
        ?>
          <tr>
          <td name="id"><?PHP echo $row['id']; ?></td>
          <td name="nom"><?PHP echo $row['nom']; ?></td>
          <td name="idSlider"><?PHP echo $row['idSlider']; ?></td>
          <td name="desc"><?PHP echo $row['descripition']; ?></td>
          <td name="refP"><?PHP echo $row['refP']; ?></td>
          <td name="prix"><?PHP echo $row['prix']; ?></td>
          <td name="prix_anc"><?PHP echo $row['prix_anc']; ?></td>
          <td name="image"><img width="200px" height="200px "  src= "<?php echo '../../'.$row['image'];?>"></td>
          <td>
          <form method="POST" action="modifierOffre.php">
                <input type="hidden" name="id" value="<?PHP echo $row['id']; ?>" readonly>
                <input type="submit" value="modifier" class="btn btn-primary mr-2">
              </form>
            </td>           
            <td>
              <form method="POST" action="../../supprimerOffre.php">
                <input type="hidden" class="hiddenreference" name="id" value="<?PHP echo $row['id']; ?>" readonly >
                <input type="submit" value="supprimer" onclick="validerSuppOffre()" class="btn btn-danger mr-2">
                
                
              </form>
            </td>
          </tr>
          <?php 
        }

        
          ?>

          
        </tbody>
      </table>
<?php 
chdir(__DIR__);
include "../entities/slider.php";
include "../core/sliderC.php";
  $sliderC=new SliderC();
  $liste=$sliderC->afficherSlider();
    
?>

      <table id="sortable-table-2" class="table table-striped">
        <thead>
                          <tr>
                            <th class="sortStyle">Refernce<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Nom<i class="icon-arrow-down"></i></th>
                            
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
          <td name="ref"><?PHP echo $row['ref']; ?></td>
          <td name="nom"><?PHP echo $row['nom']; ?></td>
          
          <td>
          <form method="POST" action="modifierSlider.php">
                <input type="hidden" name="ref" value="<?PHP echo $row['ref']; ?>" readonly>
                <input type="submit" value="modifier" class="btn btn-primary mr-2">
              </form>
            </td>
            <td>
              <form method="POST" action="../../supprimerSlider.php">
                <input type="hidden" class="hiddenreference" name="ref" value="<?PHP echo $row['ref']; ?>" readonly >
                <input type="submit" value="supprimer" class="btn btn-danger mr-2">
              </form>
            </td>
          </tr>
          <?php 
        }
          ?>
        </tbody>
      </table>
  
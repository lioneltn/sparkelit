<?php 
chdir(__DIR__);
include "../entities/metadonnee.php";
include "../core/metadonneeC.php";
  $metadonneeC=new MetadonneeC();
  $liste=$metadonneeC->afficherMetadonnee();
    
?>

      <table id="sortable-table-2" class="table table-striped">
        <thead>
                          <tr>
                            <th class="sortStyle">Reference<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">descripition<i class="icon-arrow-down"></i></th>
                            <th class="sortStyle">Logo<i class="icon-arrow-down"></i></th>
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
          <td name="ref"><?PHP echo $row['reference']; ?></td>
          <td name="desc"><?PHP echo $row['descripition']; ?></td>
          <td name="logo"><img width="200px" height="200px "  src= "<?php echo '../../'.$row['logo'];?>"></td>
          <td>
          <form method="POST" action="modifierMetadonnee.php">
                <input type="hidden" name="ref" value="<?PHP echo $row['reference']; ?>" readonly>
                <input type="submit" value="modifier" class="btn btn-primary mr-2">
              </form>
            </td>
           <td>
              <form method="POST" action="popupsupp2.php">
                <input type="hidden" class="hiddenreference" name="ref" value="<?PHP echo $row['reference']; ?>" readonly >
                <input type="submit" value="Supprimer" class="btn btn-danger mr-2">
              </form>
            </td>
          </tr>
          <?php 
        }
          ?>
        </tbody>
      </table>
  
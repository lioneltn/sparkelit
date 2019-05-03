

<?php 
/*if(isset($_SESSION['email'])==false)
{
    session_start();
}*/
chdir(__DIR__);
include "../entities/poste.php";
include "../core/postecore.php";
include "../entities/note.php";
include "../core/notecore.php";
    $poste1C=new posteC();
    $note1C= new noteC();
    //echo $_GET['page'];
    if(!isset($_COOKIE['page']))
    {
        $_COOKIE['page']=1;
    }
    session_start();
    //$debut=(($_COOKIE['page']-1)*10);
    $liste=$poste1C->afficherposte_pouradmin();


?>

<?PHP
                foreach($liste as $row)
                {
                   $nb1=$note1C->nbnoteclientetposte($row['id_poste'],$_SESSION['email']);
                    $nb=$nb1['total'];
                    if($nb!=0)
                    {
                     $listenote=$note1C->noteetcommentaireclientposte($row['id_poste'],$_SESSION['email']);
                     $note=$listenote['note'];
                     $commantaire=$listenote['commantaire'];
                    }
                ?>
                    <div class="form-group" style="width:600px; height: 950px;">
                            <div class="entry-media">
                               
                                    <img style="width: 100%;height: 400px;" src="<?php echo '../'.$row['image'];?>" alt="Post">
                                
                            </div><!-- End .entry-media -->

                            <div class="entry-body" style="border:none">
                                <div class="entry-date">
                                    <?php
                                        $date=explode("-",$row["date"]);
                                        $jour=end($date);
                                        switch($date[1])
                                        {
                                            case "01":
                                                $mois="JAN";
                                                break;
                                            case "02":
                                                $mois="FEV";
                                                break;
                                            case "03":
                                                $mois="MAR";
                                                break;
                                            case "04":
                                            $mois="AVR";
                                                break;
                                            case "05":
                                                $mois="MAI";
                                                break;
                                            case "06":
                                                $mois="JUN";
                                                break;
                                            case "07":
                                                $mois="JUL";
                                                break;

                                            case "08":
                                                $mois="AOU";
                                                break;
                                            case "09":
                                                $mois="SEP";
                                                break;
                                            case "10":
                                                $mois="OCT";
                                                break;
                                            case "11":
                                                $mois="NOV";
                                                break;
                                            case "12":
                                                $mois="DEC";
                                                break;


                                        }
                                      ?>
                                    <span class="day"><?PHP echo $jour; ?></span>
                                    <span class="month"><?PHP echo $mois; ?></span>
                                    <span class="day" style="background-color: white"><?php echo $row['note']; ?></span>
                                </div><!-- End .entry-date -->

                                  <h2 class="entry-title">
                                    <p style="font-size: 20px ; text-transform: uppercase;"><strong><?PHP echo $row['titre']; ?></strong></p>
                                </h2>

                                <div class="entry-content">
                                    <p style="width: 100% ;text-align:center ;word-wrap: break-word; height: 100px; font-size: 13px; "> <?PHP echo $row['description']; ?></p>

                                   
                                </div>
                                    <form style="position: absolute;  padding-top: 20px; padding-bottom: 20px;" action="affichercommantairesporto.php" method="POST" >
                                     <input type="hidden" name="id" value="<?php echo $row['id_poste'] ;?>">
                                  <input type="submit"  class="btn btn-primary" style="width: 40px;height: 20px;font-size: 7px;" value="Afficher les commantaires">
                                </form>
                                <br>
                                <form action="../ajouterNote.php" method="POST">
                                    <input type="hidden" name="id_poste" value="<?php echo $row['id_poste'] ;?>">
                                      <input type="hidden" name="id_client" value="<?php echo $_SESSION['email'];?>">
                                    <div class="rating" style="padding-top: 20px ">
                                        <?php
                                            if($nb!=0)
                                            {

                                        ?>
                                            <input type="hidden" name="note" id="noteposte_<?php echo $row['id_poste'] ;?>" value="<?php echo $note; ?>" onchange="notechange(this.id)">
                                            <?php 
                                            if($note==1)//color: #303030; color:#f1c40f;

                                            {
                                            ?>
                                                 <i style="color: #303030;" class="icon ion-md-star b1" id="b1_<?php echo $row['id_poste'] ;?>" onclick="note5(this.id)"></i>
                                                  <i style="color: #303030;" class="icon ion-md-star b2" id="b2_<?php echo $row['id_poste'] ;?>" onclick="note4(this.id)"></i>
                                                   <i style="color: #303030;" class="icon ion-md-star b3" id="b3_<?php echo $row['id_poste'] ;?>" onclick="note3(this.id)"></i>
                                                    <i style="color: #303030;" class="icon ion-md-star b4" id="b4_<?php echo $row['id_poste'] ;?>" onclick="note2(this.id)"></i>
                                                    <i style="color:#f1c40f;" class="icon ion-md-star b5" id="b5_<?php echo $row['id_poste'] ;?>"  onclick="note1(this.id)"></i>
                                            <?php
                                            }
                                            if($note==2)
                                            {
                                            ?>
                                                <i style="color: #303030;" class="icon ion-md-star b1" id="b1_<?php echo $row['id_poste'] ;?>" onclick="note5(this.id)"></i>
                                                  <i style="color: #303030;" class="icon ion-md-star b2" id="b2_<?php echo $row['id_poste'] ;?>" onclick="note4(this.id)"></i>
                                                   <i style="color: #303030;" class="icon ion-md-star b3" id="b3_<?php echo $row['id_poste'] ;?>" onclick="note3(this.id)"></i>
                                                    <i style="color: #f1c40f;" class="icon ion-md-star b4" id="b4_<?php echo $row['id_poste'] ;?>" onclick="note2(this.id)"></i>
                                                    <i style="color:#f1c40f;" class="icon ion-md-star b5" id="b5_<?php echo $row['id_poste'] ;?>"  onclick="note1(this.id)"></i>

                                            <?php 
                                            }
                                            if($note==3)
                                            {
                                            ?>
                                                <i style="color: #303030;" class="icon ion-md-star b1" id="b1_<?php echo $row['id_poste'] ;?>" onclick="note5(this.id)"></i>
                                                  <i style="color: #303030;" class="icon ion-md-star b2" id="b2_<?php echo $row['id_poste'] ;?>" onclick="note4(this.id)"></i>
                                                   <i style="color: #f1c40f;" class="icon ion-md-star b3" id="b3_<?php echo $row['id_poste'] ;?>" onclick="note3(this.id)"></i>
                                                    <i style="color: #f1c40f;" class="icon ion-md-star b4" id="b4_<?php echo $row['id_poste'] ;?>" onclick="note2(this.id)"></i>
                                                    <i style="color:#f1c40f;" class="icon ion-md-star b5" id="b5_<?php echo $row['id_poste'] ;?>"  onclick="note1(this.id)"></i>
                                            <?php   
                                            }
                                            if($note==4)
                                            {
                                            ?>
                                                <i style="color: #303030;" class="icon ion-md-star b1" id="b1_<?php echo $row['id_poste'] ;?>" onclick="note5(this.id)"></i>
                                                  <i style="color: #f1c40f;" class="icon ion-md-star b2" id="b2_<?php echo $row['id_poste'] ;?>" onclick="note4(this.id)"></i>
                                                   <i style="color: #f1c40f;" class="icon ion-md-star b3" id="b3_<?php echo $row['id_poste'] ;?>" onclick="note3(this.id)"></i>
                                                    <i style="color: #f1c40f;" class="icon ion-md-star b4" id="b4_<?php echo $row['id_poste'] ;?>" onclick="note2(this.id)"></i>
                                                    <i style="color:#f1c40f;" class="icon ion-md-star b5" id="b5_<?php echo $row['id_poste'] ;?>"  onclick="note1(this.id)"></i>

                                            <?php 
                                            }
                                            if($note==5)
                                            {


                                            ?>
                                            <i style="color: #f1c40f;" class="icon ion-md-star b1" id="b1_<?php echo $row['id_poste'] ;?>" onclick="note5(this.id)"></i>
                                                  <i style="color: #f1c40f;" class="icon ion-md-star b2" id="b2_<?php echo $row['id_poste'] ;?>" onclick="note4(this.id)"></i>
                                                   <i style="color: #f1c40f;" class="icon ion-md-star b3" id="b3_<?php echo $row['id_poste'] ;?>" onclick="note3(this.id)"></i>
                                                    <i style="color: #f1c40f;" class="icon ion-md-star b4" id="b4_<?php echo $row['id_poste'] ;?>" onclick="note2(this.id)"></i>
                                                    <i style="color:#f1c40f;" class="icon ion-md-star b5" id="b5_<?php echo $row['id_poste'] ;?>"  onclick="note1(this.id)"></i>
                                            <?php
                                            }
                                            ?>

                                            
                                            

    
                                          


                                            <?php
                                            }
                                            else
                                            {
                                            ?>
                                                <input type="hidden" name="note" id="noteposte_<?php echo $row['id_poste'] ;?>" onchange="notechange(this.id)">
                                                <i  class="icon ion-md-star b1" id="b1_<?php echo $row['id_poste'] ;?>" onclick="note5(this.id)"></i>
                                                      <i  class="icon ion-md-star b2" id="b2_<?php echo $row['id_poste'] ;?>" onclick="note4(this.id)"></i>
                                                       <i  class="icon ion-md-star b3" id="b3_<?php echo $row['id_poste'] ;?>" onclick="note3(this.id)"></i>
                                                        <i  class="icon ion-md-star b4" id="b4_<?php echo $row['id_poste'] ;?>" onclick="note2(this.id)"></i>
                                                        <i  class="icon ion-md-star b5" id="b5_<?php echo $row['id_poste'] ;?>"  onclick="note1(this.id)"></i>
                                            <?php
                                            }
                                            ?>
                                        
                                        
                                     
                                        
                                      
                                    </div>
                                     <div class="form-group">
                                                <label>Comment</label>
                                                <div class="form-group">
                                                <?php
                                                if($nb!=0)
                                                {
                                                ?>
                                                    <textarea style="max-width: 10000px;width: 100%;" name="commentaire" class="form-control" ><?php echo $commantaire; ?></textarea>
                                                <?php
                                                }
                                                else
                                                {
                                                ?>
                                                 <textarea style="max-width: 10000px;width: 100%;" name="commentaire" class="form-control" ></textarea>
                                                 <?php 
                                                 } 
                                                 ?>
                                                </div>  
                                                 <input type="submit" name="" class="btn btn-primary" value="Envoyer">
                                            </div><!-- End .form-group --><!-- End .entry-content -->
                                           
                                            

                                </form>
                            

                               
                            </div><!-- End .entry-body -->

                                       
                        </div><!-- End .entry -->

                    <?php 
                    }
                    ?>
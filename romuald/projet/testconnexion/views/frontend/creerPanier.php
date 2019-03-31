


<?php 
include '../../core/config.php';
session_start();
echo $_POST["creer"];
if(!empty( $_POST["creer"] && $_POST["creer"]==1 )){
    $sql='insert into panier(temporaire,idDetail) values (:temporaire,:idDetail)';   
    $sql2='SELECT COUNT(*) as nombre FROM panier';
    $db= config::getConnexion();
    try{ $req=$db->prepare($sql);$req->bindValue(':temporaire',' je lai fait');
        $req2=$db->prepare($sql2);
        $req->bindValue(':idDetail',1);
        $req->execute(); 
        if($req2->execute()){$rows=$req2->fetchAll();
                             $_SESSION['idPanier']=intval($rows[0]['nombre']);}
        echo $_SESSION['idPanier'];}
        
        catch (Exception $e)  { echo 'Erreur:'.$e->getMessage(); }
    
   
}

?>
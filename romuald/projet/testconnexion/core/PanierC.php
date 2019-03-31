<?php
include "Panier.php";
include "config.php";
class produitPanierC
{
  static function ajouterProduitPanier($produitPanier) {
      
         	$sql2="SELECT COUNT(*) as 'nombre'
          FROM panier";
     
      
		$db = config::getConnexion();
		try
		{ $req2=$db->prepare($sql2);
          if($req2->execute()){
                $rows=$req2->fetchAll();
                
                $idPanier=intval($rows[0]["nombre"]);
                echo "lidee panier est".$idPanier;
                $sql3="insert into produitpanier(image,quantite,couleur,idPanier,prix) values (:image,:quantite,:couleur,:idPanier,:prix)";
                $req3=$db->prepare($sql3);
                $req3->bindValue(':image',$produitPanier->getImage());
		$req3->bindValue(':quantite',$produitPanier->getQuantite());
		$req3->bindValue(':couleur',$produitPanier->getCouleur());
		$req3->bindValue(':prix',floatval($produitPanier->getPrix()));
		$req3->bindValue(':idPanier',$idPanier);
                 if($req3->execute()){
                     echo "oui";
                 }
                else echo "non";
            }
             
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
      
  
}
    static function afficherPanier($idPanier){
        $sql="SELECT image,quantite,prix from produitpanier where idPanier=:idPanier";
        $db = config::getConnexion();
        try
		{  
                   
$req=$db->prepare($sql);
            $req->bindValue(":idPanier",$idPanier);
		
         if($req->execute()){
            $rows=$req->fetchAll();
             $n=$req->rowCount();            
            echo "cela ne marche pas";
            for($i=0;$i<$n;$i++){
                    
                    echo ' <tr class="product-row">
                                        <td class="product-col">
                                            <figure class="product-image-container">
                                                <a href="" class="product-image">
                                                    <img src="'.$rows[$i]["image"].'" alt="product" >
                                                </a>
                                            </figure>
                                            <h2 class="product-title">
                                                <a >Jumpsuit</a>
                                            </h2>
                                        </td>
                                        <td>'.$rows[$i]["prix"].'</td>
                                        <td>
                                            <input class="vertical-quantity form-control" type="text" value="'.$rows[$i]["quantite"].'" image2="'.$rows[$i]["image"].'" index="'.$i.'">
                                        </td>
                                        <td class="prix">';
                
            $v=intval($rows[$i]["prix"])*intval($rows[$i]["quantite"]);
                echo $v;
                echo '</td>
                                    </tr>
                                    <tr class="product-action-row">
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                            </div><!-- End .float-left -->
                                            
                                            <div class="float-right">
                                                <a  title="Edit product" class="btn-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                                                <button style="background:rgba(0,0,0,0); border: 0px solid black;" title="Remove product" class="btn-remove" id="'.$rows[$i]["image"].'"><span class="sr-only">Remove</span></button>
                                            </div><!-- End .float-right -->
                                        </td>
                                    </tr>
                             ';
                
//             
}
             
//             
}
         else echo "cela n'a pas marche";
    }
       
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
        
    }
    
    static function supprimerPanier($image){
      $sql="DELETE FROM produitpanier WHERE image=:image ";
     $db = config::getConnexion();
		try
		{
            $req=$db->prepare($sql);
            $req->bindValue(':image',$image);
            if($req->execute()){
    
                     echo "oui";
                 }
                else echo "non";
            }
             
        
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
static function modifier($quantite,$image){
    $sql= array();
    $req= array();
    for( $i=0;$i<sizeof($quantite);$i++)
    {
        $sql[$i]="UPDATE produitPanier SET quantite=".intval($quantite[$i])." WHERE image=:image";
    }

     $db = config::getConnexion();
		try
		{
             for( $i=0;$i<sizeof($quantite);$i++)
             {
            $req[$i]=$db->prepare($sql[$i]);
            $req[$i]->bindValue(":image",$image[$i]);
                 if(!$req[$i]->execute()) echo "cela n'a pas marche";
                
        }
        }
            
             
        
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
        
    
}    

}
  ?>

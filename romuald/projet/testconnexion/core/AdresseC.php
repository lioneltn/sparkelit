<?php 
include "config.php";
include "Adresse.php";
class AdresseC {
function  ajouterAdresse($adresse){
    	$sql="insert into adressetotal(adresse,ville,pays,codePostal,tel,region,login,companie) values (:adresse,:ville,:pays,:codePostal,:tel,:region,:login,:companie)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);
		$req->bindValue(':adresse',$adresse->getAdresse());
		$req->bindValue(':ville',$adresse->getville());
		$req->bindValue(':pays',$adresse->getPays());
		$req->bindValue(':codePostal',$adresse->getCodePostal());
		$req->bindValue(':tel',$adresse->getTel());
		$req->bindValue(':region',$adresse->getRegion());
		$req->bindValue(':login',$adresse->getLogin());
		$req->bindValue(':companie',$adresse->getCompanie());
            $req->execute();
           
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }	
    
}
    
    static function  afficherAdresse($login){
     $sql="SElECT nom,prenom,adresse,ville,pays,codePostal,tel,region,companie From adressetotal
   inner join  utilisateur  on adressetotal.login=utilisateur.login
     where utilisateur.login=:login";
        $db = config::getConnexion();
        try
		{  
                   

        $req=$db->prepare($sql);
        $req->bindValue(':login',$login);
		
         if($req->execute()){
            $rows=$req->fetchAll();
             $n=$req->rowCount();            
            echo "cela ne marche pas";
            for($i=0;$i<$n;$i++){
                    
                    echo '<div class="shipping-address-box active">
                                    <address>
                                        Nom:'.$rows[$i]["nom"].' '. $rows[$i]["prenom"].' <br>
                                       Adresse'.$rows[$i]["adresse"].' <br>
                                        Pays'.$rows[$i]["pays"].'<br>
                                        CodePostal '.$rows[$i]["codePostal"].' <br>
                                       Tel'.$rows[$i]["tel"].' <br>
                                       Region:'.$rows[$i]["region"].' <br>
                                       companie:'.$rows[$i]["companie"].' <br>
                                     
                                    </address>

</div><!-- End .shipping-address-box -->
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

}
?>
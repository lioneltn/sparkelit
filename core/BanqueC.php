<?php include 'Banque.php';
include "config.php";
class BanqueC 
{
	
    
    function ajouterBanque($banque)
    {
      
        	$sql="insert into Banque(cardName,cardNumber,expirationMonth,expirationYear,CVV,email) values (:cardName,:cardNumber,:expirationMonth,:expirationYear,:CVV,:email)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);
        
		$req->bindValue(':cardName',$banque->getCardName());
		$req->bindValue(':cardNumber',$banque->getCardNumber());
		$req->bindValue(':expirationMonth',$banque->getExpirationMonth());
		$req->bindValue(':expirationYear',$banque->getExpirationYear());
		$req->bindValue(':CVV',$banque->getCVV());
		$req->bindValue(':email',$banque->getLogin());
        if($req->execute()){
            echo"ok";
        }else{
            echo "non";
        }
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
    }
    
      function supprimerCommande($idCommande)
    {
        	$sql="DELETE FROM commande where idcommande=:idCommande";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);
        $req->bindValue(':idCommande',$idCommande);
            $req->execute();
           
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
    }
    
   function modifierCommande($commande,$idCommande){
		$sql="UPDATE commande SET etat=:etat  WHERE idCommande=:idCommande";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$req->bindValue(':etat',$commande->getEtat());
		$req->bindValue(':idCommande',$idCommande);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  
        }
		
	}

	
}

?>


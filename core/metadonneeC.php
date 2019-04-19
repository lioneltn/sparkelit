<?PHP
include "../config.php";
class MetadonneeC 
{
	
function ajouterMetadonnee($metadonnee)
{

	$sql="insert into metadonnee values (:reference,:descripition, :logo)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);
		
        $reference=$metadonnee->getref();
        $descripition=$metadonnee->getdesc();
        $logo=$metadonnee->getlogo();

		$req->bindValue(':reference',$reference);
		$req->bindValue(':descripition',$descripition);
		$req->bindValue(':logo',$logo);

            $req->execute();
           
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
		
}

function afficherMetadonnee()
	{
		
		$sql="SElECT * From metadonnee";
		$db = config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}





     function supprimerMetadonnee($reference)
     {
		$sql="DELETE FROM metadonnee where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function modifierMetadonnee($metadonnee,$reference)
		{
		$sql="UPDATE metadonnee SET reference=:reference, descripition=:descripition , logo=:logo WHERE reference=$reference ";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{		
        $req=$db->prepare($sql);

		$reference=$metadonnee->getref();
        $descripition=$metadonnee->getdesc();
        $logo=$metadonnee->getlogo();

		//$datas = array(':id'=>$id, ':nom'=>$nom, ':idSlider'=>$idSlider,':descripition'=>$descripition,':refP'=>$refP ,':prix'=>$prix ,':prix_anc'=>$prix_anc ,':image'=>$image);


		$req->bindValue(':reference',$reference);
		$req->bindValue(':descripition',$descripition);
		$req->bindValue(':logo',$logo);
				
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   			//echo " Les datas : " ;
  			//print_r($datas);
        }

    }
	function recupererMetadonnee($reff)
	{
		$sql="SELECT * from metadonnee where reference=$reff";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}






}
<?PHP
include "../config4.php";
class SliderC 
{
	
function ajouterSlider($slider)
{

	$sql="insert into slider values (:ref,:nom)";
		$db = config4::getConnexion();
		try
		{
        $req=$db->prepare($sql);
		
        $ref=$slider->getref();
        $nom=$slider->getnom();

		$req->bindValue(':ref',$ref);
		$req->bindValue(':nom',$nom);
            $req->execute();
           
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
		
}

function afficherSlider()
	{
		
		$sql="SElECT * From slider order by nom";
		$db = config4::getConnexion();
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

function afficherRefSlider()
	{
		$sql="SELECT ref From slider";
		$db = config4::getConnexion();
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




     function supprimerSlider($ref)
     {
		$sql="DELETE FROM slider where ref= :ref";
		$db = config4::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ref',$ref);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function modifierSlider($slider,$reff)
		{
		$sql="UPDATE slider SET ref=:ref, nom=:nom WHERE ref=$reff ";
		
		$db = config4::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{		
        $req=$db->prepare($sql);

		$ref=$slider->getref();
        $nom=$slider->getnom();
       

		//$datas = array(':id'=>$id, ':nom'=>$nom, ':idSlider'=>$idSlider,':descripition'=>$descripition,':refP'=>$refP ,':prix'=>$prix ,':prix_anc'=>$prix_anc ,':image'=>$image);


		$req->bindValue(':ref',$ref);
		$req->bindValue(':nom',$nom);
				
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   			//echo " Les datas : " ;
  			//print_r($datas);
        }

    }
	function recupererSlider($reff)
	{
		$sql="SELECT * from slider where ref=$reff";
		$db = config4::getConnexion();
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
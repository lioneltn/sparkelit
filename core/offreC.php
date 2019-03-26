<?php


include "../config.php";
class offreC
{

	function ajouterOffre($offre)
	{
		$sql="insert into offre values (:id,:nom,:idSlider,:descripition,:refP,:image,:prix,:prix_anc)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);
		
        $id=$offre->getid();
        $nom=$offre->getnom();
        $idSlider=$offre->getidSlider();
        $descripition=$offre->getdesc();
        $refP=$offre->getrefP();
        $image=$offre->getimage();
        $prix=$offre->getprix();
        $prix_anc=$offre->getprix_anc();

		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':idSlider',$idSlider);
		$req->bindValue(':descripition',$descripition);
		$req->bindValue(':refP',$refP);
		$req->bindValue(':image',$image);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':prix_anc',$prix_anc);

            $req->execute();
           
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function afficherOffre()
	{
		
		$sql="SElECT * From offre";
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

function afficherIdOffre()
	{
		$sql="SElECT id From offre";
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




     function supprimerOffre($id){
		$sql="DELETE FROM offre where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierOffre($offre,$idd){
		$sql="UPDATE offre SET id=:id, nom=:nom,idSlider=:idSlider,descripition=:descripition,refP=:refP,image=:image WHERE id=:idd";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$offre->getid();
        $nom=$offre->getnom();
        $idSlider=$offre->getidSlider();
        $descripition=$offre->getdescripition();
        $refP=$offre->getrefP();
        $image=$offre->getimage();
		$datas = array(':id'=>$id, ':nom'=>$nom,':idSlider'=>$idSlider,':descripition'=>$descripition,':refP'=>$refP ,':image'=>$image);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':idSlider',$idSlider);
		$req->bindValue(':descripition',$descripition);
		$req->bindValue(':refP',$refP);
        $req->bindValue(':image',$image);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererOffre($id)
	{
		$sql="SELECT * from offre where id=$id";
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


/*function afficherRefProduit()
	{
		$sql="SElECT reference From produit";
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
*/






}
?>


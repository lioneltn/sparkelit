<?php


include "../config4.php";
class offreC
{

	function ajouterOffre($offre)
	{
		$sql="insert into offre values (:id,:nom,:idSlider,:descripition,:refP,:prix,:prix_anc,:image)";
		$db = config4::getConnexion();
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
		
		$sql="SElECT * From offre order by nom";
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

function afficherIdOffre()
	{
		$sql="SELECT id From offre";
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




     function supprimerOffre($id)
     {
		$sql="DELETE FROM offre where id= :id";
		$db = config4::getConnexion();
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
		function modifierOffre($offre,$idd)
		{
		$sql="UPDATE offre SET id=:id, nom=:nom, idSlider=:idSlider, descripition=:descripition, refP=:refP , prix=:prix
		, prix_anc=:prix_anc , image=:image WHERE id=$idd ";
		
		$db = config4::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{		
        $req=$db->prepare($sql);

		$id=$offre->getid();
        $nom=$offre->getnom();
        $idSlider=$offre->getidSlider();
        $descripition=$offre->getdesc();
        $refP=$offre->getrefP();
        $prix=$offre->getprix();
        $prix_anc=$offre->getprix_anc();
        $image=$offre->getimage();

		//$datas = array(':id'=>$id, ':nom'=>$nom, ':idSlider'=>$idSlider,':descripition'=>$descripition,':refP'=>$refP ,':prix'=>$prix ,':prix_anc'=>$prix_anc ,':image'=>$image);


		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':idSlider',$idSlider);
		$req->bindValue(':descripition',$descripition);
		$req->bindValue(':refP',$refP);
		$req->bindValue(':image',$image);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':prix_anc',$prix_anc);		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   			//echo " Les datas : " ;
  			//print_r($datas);
        }

    }
	function recupererOffre($idd)
	{
		$sql="SELECT * from offre where id=$idd";
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

function chercherOffres($cher)
	{
		
		$sql="SELECT id, nom, idSlider, descripition,refP,prix, prix_anc,image FROM offre WHERE nom LIKE :cher OR id LIKE :cher OR descripition LIKE :cher OR refP LIKE :cher OR idSlider LIKE :cher OR prix LIKE :cher OR prix_anc LIKE :cher OR image LIKE :cher";
		$db = config4::getConnexion();
		try
		{
			$req=$db->prepare($sql);

			$req->bindValue(':cher',$cher);
			$req->execute();
			return $req->fetchAll();

		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}

function rechercherParNom($cher)
	{
		$sql="SElECT * from offre where nom like :cher";
		$db = config4::getConnexion();
		try
		{
			$cher2=$cher."%";
			$req=$db->prepare($sql);
			$req->bindValue(':cher',$cher2);
			$req->execute();
			$ret=$req->fetchAll();
           	return $ret; 
		} 
		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}
	}

function rechercherParRef($cher)
	{
		
		$sql="SElECT * from offre where refP like :cher";
		$db = config4::getConnexion();
		try
		{
			$cher2=$cher."%";
			$req=$db->prepare($sql);
			$req->bindValue(':cher',$cher2);
			$req->execute();
			$ret=$req->fetchAll();
           	return $ret; 
		} 
		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}
	}




}
?>


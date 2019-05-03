<?php


include "config.php";



class offreC
{

	function ajouterOffre($offre)
	{
		$sql="insert into offre values (:id,:nom,:descripition,:refP,:prix,:prix_anc,:image,:remise,:dateD,:dateF)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);
		
        $id=$offre->getid();
        $nom=$offre->getnom();
        $descripition=$offre->getdesc();
        $refP=$offre->getrefP();
        $image=$offre->getimage();
        $prix=$offre->getprix();
        $prix_anc=$offre->getprix_anc();
        $remise=$offre->getremise();
        $dateD=$offre->getdateD();
        $dateF=$offre->getdateF();


		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':descripition',$descripition);
		$req->bindValue(':refP',$refP);
		$req->bindValue(':image',$image);
       $req->bindValue(':prix',$prix);
        $req->bindValue(':remise',$remise);
        $req->bindValue(':prix_anc',$prix_anc);
        $req->bindValue(':dateD',$dateD);
        $req->bindValue(':dateF',$dateF);

            $req->execute();
           
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function afficherOffre()
	{
		
		$sql="SElECT * From offre order by id ";
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
		$sql="SELECT id From offre";
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

function calculerPrix($offre){
		echo ($offre->getremise() * $offre->getprix_anc())/100 ;
	}


     function supprimerOffre($id)
     {
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
		function modifierOffre($offre,$idd)
		{
		$sql="UPDATE offre SET id=:id, nom=:nom, descripition=:descripition, refP=:refP 
		, prix_anc=:prix_anc, remise=:remise , image=:image , dateD=:dateD , dateF=:dateF WHERE id=$idd ";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{		
        $req=$db->prepare($sql);

		$id=$offre->getid();
        $nom=$offre->getnom();
        $descripition=$offre->getdesc();
        $refP=$offre->getrefP();
        //$prix=$offre->getprix();
        $prix_anc=$offre->getprix_anc();
        $image=$offre->getimage();
        $remise=$offre->getremise();
        $dateD=$offre->getdateD();
        $dateF=$offre->getdateF();
		//$datas = array(':id'=>$id, ':nom'=>$nom, ':idSlider'=>$idSlider,':descripition'=>$descripition,':refP'=>$refP ,':prix'=>$prix ,':prix_anc'=>$prix_anc ,':image'=>$image);


		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':descripition',$descripition);
		$req->bindValue(':refP',$refP);
		$req->bindValue(':image',$image);
        //$req->bindValue(':prix',$prix);
        $req->bindValue(':prix_anc',$prix_anc);	
        $req->bindValue(':remise',$remise);
        $req->bindValue(':dateD',$dateD);	
		$req->bindValue(':dateF',$dateF);

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

function chercherOffres($cher)
	{
		
		$sql="SELECT id, nom, descripition,refP,prix, prix_anc,image FROM offre WHERE nom LIKE :cher OR id LIKE :cher OR descripition LIKE :cher OR refP LIKE :cher  OR prix LIKE :cher OR prix_anc LIKE :cher OR image LIKE :cher";
		$db = config::getConnexion();
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
		$db = config::getConnexion();
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

function rechercherParID($cher)
	{
		
		$sql="SElECT * from offre where id like :cher";
		$db = config::getConnexion();
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

function rechercherParRemise($cher)
	{
		
		$sql="SElECT * from offre where remise like :cher";
		$db = config::getConnexion();
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

	function afficherOffrerParId($idd)
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From offre where id=:idd";
		$db = config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':idd',$idd);
			$req->execute();
			$liste=$req->fetch();
			return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}


}
?>


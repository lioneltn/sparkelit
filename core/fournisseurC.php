<?php


include "../config2.php";
class FournisseurC
{

	function ajouterFournisseur($fournisseur)
	{
		$sql="insert into fournisseur values (:ref,:ville,:pays,:region,:email,:num)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);
		
        $ref=$fournisseur->getreference();
        $ville=$fournisseur->getville();
        $pays=$fournisseur->getpays();
        $region=$fournisseur->getregion();
        $email=$fournisseur->getemail();
        $num=$fournisseur->getnumero();

		$req->bindValue(':ref',$ref);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':pays',$pays);
		$req->bindValue(':region',$region);
		$req->bindValue(':email',$email);
		$req->bindValue(':num',$num);

            $req->execute();
           
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function afficherFournisseur()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fournisseur";
		$db = config2::getConnexion();
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
	function afficherFournisseurRef()
	{
		$sql="SElECT reference From fournisseur";
		$db = config2::getConnexion();
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


  ?>
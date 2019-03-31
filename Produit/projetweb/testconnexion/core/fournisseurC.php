<?php

chdir(__DIR__);
include "../config2.php";
class FournisseurC
{

	function ajouterFournisseur($fournisseur)
	{
		$sql="insert into fournisseur values (:ref,:ville,:pays,:region,:email,:num)";
		$db = config2::getConnexion();
		/*try
		{*/
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
           
        /*}
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }*/
		
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

	function trieFournisseurnom()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fournisseur order by reference";
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

	function trieFournisseurpays()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fournisseur order by pays";
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

	function trieFournisseurregion()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fournisseur order by region";
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

	function trieFournisseurville()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fournisseur order by ville";
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

	function trieFournisseuremail()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fournisseur order by email";
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

	function trieFournisseurnumero()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fournisseur order by numero";
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

	function afficherFournisseurParRef($ref)
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fournisseur where reference=:ref";
		$db = config2::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':ref',$ref);
			$req->execute();
			$liste=$req->fetch();
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

	function modifierFournisseur($fournisseur)
	{
		$sql="Update fournisseur set ville=:ville,pays=:pays,region=:region,email=:email,numero=:num where reference=:ref";
		$db = config2::getConnexion();
		/*try
		{*/
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
		/*}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	*/
	}

	function supprimerFournisseur($ref)
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="Delete From fournisseur where reference=:ref";
		$db = config2::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':ref',$ref);
			$req->execute();
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}


}


  ?>
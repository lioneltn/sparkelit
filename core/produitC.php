<?php

chdir(__DIR__);
include "../config3.php";
class ProduitC
{

	function ajouterProduit($produit)
	{
		$sql="insert into produit values (:nom,:description,:type,:fournisseur,:categorie,:thumbnail,:prix,:reference)";
		$db = config3::getConnexion();
		try
		{
        $req=$db->prepare($sql);
		
        $reference=$produit->getreference();
        $nom=$produit->getnom();
        $description=$produit->getdescription();
        $type=$produit->gettype();
        $fournisseur=$produit->getfournisseur();
        $categorie=$produit->getcategorie();
        $thumbnail=$produit->getthumbnail();
        $prix=$produit->getprix();
        $reference=$produit->getreference();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':type',$type);
		$req->bindValue(':fournisseur',$fournisseur);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':thumbnail',$thumbnail);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':reference',$reference);
            $req->execute();
           
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();

        }
		
	}

	function afficherProduits()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config3::getConnexion();
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

	function ajouterDetails($taille,$couleur,$quantite,$image,$produit)
	{

		$sql="insert into detailsproduit values(NULL,:taille,:couleur,:quantite,:image,:produit)";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':taille',$taille);
			$req->bindValue(':couleur',$couleur);
			$req->bindValue(':quantite',$quantite);
			$req->bindValue(':image',$image);
			$req->bindValue(':produit',$produit);
        	    $req->execute();
           
		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}


	}
	function afficherProduitParRef($ref)
	{
		$sql="SElECT * from produit where reference=:ref";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':ref',$ref);
			$req->execute();
			$ret=$req->fetch();
           	return $ret; 
		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}

	}


	function afficherDetailsParRef($ref)
	{
		$sql="SElECT * from detailsproduit where ref_produit=:ref";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':ref',$ref);
			$req->execute();
			$ret=$req->fetchAll();
           	return $ret; 

		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}

	}
	/*function afficherFournisseurRef()
	{
		$sql="SElECT reference From fournisseur";
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
	}*/

	function afficherRefProduit()
	{
		$sql="SElECT reference From produit";
		$db = config3::getConnexion();
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



	function afficherSizes($ref,$color)
	{
		$sql="SELECT taille FROM detailsproduit WHERE ref_produit=:ref AND couleur=:color";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':ref',$ref);
			$req->bindValue(':color',$color);
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
<?php


include "../config.php";
class ProduitC
{

	function ajouterProduit($produit)
	{
		$sql="insert into produit values (:nom,:description,:type,:fournisseur,:categorie,:thumbnail,:prix,:reference)";
		$db = config::getConnexion();
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

	function ajouterDetails($taille,$couleur,$quantite,$image,$produit)
	{

		$sql="insert into detailsproduit values(NULL,:taille,:couleur,:quantite,:image,:produit)";
		$db = config::getConnexion();
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


}


  ?>
<?php

chdir(__DIR__);
include "../config3.php";
class ProduitC
{

	function ajouterProduit($produit)
	{
		$sql="insert into produit values (:nom,:description,:type,:fournisseur,:categorie,:thumbnail,:prix,:reference,NULL)";
		$db = config3::getConnexion();
		/*try
		{*/
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
           
        /*}
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();

        }*/
		
	}

	function ajouterProduitaccesoire($produit)
	{
		$sql="insert into produit values (:nom,:description,:type,:fournisseur,:categorie,:thumbnail,:prix,:reference,:quantite)";
		$db = config3::getConnexion();
		/*try
		{*/
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
        $quantite=$produit->getquantite();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':type',$type);
		$req->bindValue(':fournisseur',$fournisseur);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':thumbnail',$thumbnail);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':quantite',$quantite);
            $req->execute();
           
        /*}
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();

        }*/
		
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


	function trieProduitsnom()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit ORDER BY nom";
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

	function trieProduitsreference()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit ORDER BY reference";
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

	function trieProduitscategorie()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit ORDER BY categorie";
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

	function trieProduitsprix()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit ORDER BY prix";
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

	function trieProduitsfournisseur()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit ORDER BY fournisseur";
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

	function trieProduitstype()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit ORDER BY type";
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

	function trieProduitsdescription()
	{
		$sql="SElECT * From produit ORDER BY description";
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



	function rechercheProduitParRef($ref)
	{
		$sql="SElECT * from produit where reference like :ref";
		$db = config3::getConnexion();
		try
		{
			$ref2=$ref."%";
			$req=$db->prepare($sql);
			$req->bindValue(':ref',$ref2);
			$req->execute();
			$ret=$req->fetchAll();
           	return $ret; 
		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}

	}

	function rechercheProduitParFour($four)
	{
		$sql="SElECT * from produit where fournisseur like :four";
		$db = config3::getConnexion();
		try
		{
			$four2=$four."%";
			$req=$db->prepare($sql);
			$req->bindValue(':four',$four2);
			$req->execute();
			$ret=$req->fetchAll();
           	return $ret; 
		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}
	}

	function rechercheProduitParNom($nom)
	{
		$sql="SElECT * from produit where nom like :nom";
		$db = config3::getConnexion();
		try
		{
			$nom2=$nom."%";
			$req=$db->prepare($sql);
			$req->bindValue(':nom',$nom2);
			$req->execute();
			$ret=$req->fetchAll();
           	return $ret; 
		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}
	}

	function rechercheProduitParType($type)
	{
		$sql="SElECT * from produit where type like :type";
		$db = config3::getConnexion();
		try
		{
			$type2=$type."%";
			$req=$db->prepare($sql);
			$req->bindValue(':type',$type2);
			$req->execute();
			$ret=$req->fetchAll();
           	return $ret; 
		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}
	}

	function afficherDetailsParRef($ref)
	{
		$sql="SELECT * from detailsproduit where ref_produit=:ref";
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
	function nombreDeDetails($ref)
	{
		$sql="SELECT count(*) as Total from detailsproduit where ref_produit=:ref";
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

	function nombreDeProduitsparCategorie($categorie)
	{
		$sql="SELECT count(*) as Total from produit where categorie=:categorie";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':categorie',$categorie);
			$req->execute();
			$ret=$req->fetch();
           	return $ret; 
		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}
	}
	function afficherProduitsparCategorie($categorie)
	{
		$sql="SELECT * from produit where categorie=:categorie";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':categorie',$categorie);
			$req->execute();
			$ret=$req->fetchAll();
           	return $ret; 
		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}
	}

	function nombreDeProduitsparFournisseur($fournisseur)
	{
		$sql="SELECT count(*) as Total from produit where fournisseur=:fournisseur";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':fournisseur',$fournisseur);
			$req->execute();
			$ret=$req->fetch();
           	return $ret; 
		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}
	}
	function afficherProduitsparFournisseur($fournisseur)
	{
		$sql="SELECT * from produit where fournisseur=:fournisseur";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':fournisseur',$fournisseur);
			$req->execute();
			$ret=$req->fetchAll();
           	return $ret; 
		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}
	}

	function modifierProduits($produit)
	{
		$sql="update produit SET nom=:nom, description=:description, type=:type, fournisseur=:fournisseur, categorie=:categorie, thumbnail=:thumbnail, prix=:prix, quantite=:quantite WHERE reference=:reference";

		$db = config3::getConnexion();
		/*try
		{*/
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
        $quantite=$produit->getquantite();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':type',$type);
		$req->bindValue(':fournisseur',$fournisseur);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':thumbnail',$thumbnail);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':quantite',$quantite);
            $req->execute();
           
       /* }
        catch (Exception $e)
        {
        	echo "<br>";
            echo 'Erreur: '.$e->getMessage();
            echo "<br>";

        }*/
	}



	function modifierProduitssansimage($produit)
	{
		$sql="update produit set nom=:nom, description=:description, type=:type, fournisseur=:fournisseur, categorie=:categorie, prix=:prix, quantite=:quantite where reference=:reference";
		$db = config3::getConnexion();
		/*try
		{*/
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
        $quantite=$produit->getquantite();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':type',$type);
		$req->bindValue(':fournisseur',$fournisseur);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':quantite',$quantite);
            $req->execute();
           
        /*}
        catch (Exception $e)
        {
        	echo "<br>";
            echo 'Erreur: '.$e->getMessage();
            echo "<br>";

        }*/
	}
	function modifierDetails($taille,$couleur,$quantite,$image,$produit)
	{

		$sql="update detailsproduit set quantite=:quantite, image=:image where ref_produit=:produit AND couleur=:couleur AND taille=:taille";
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
			echo "<br>";
			 echo 'Erreur: '.$e->getMessage();	
			 echo "<br>";
		}


	}

	function modifierDetailssansimage($taille,$couleur,$quantite,$produit)
	{

		$sql="update detailsproduit set quantite=:quantite where ref_produit=:produit AND couleur=:couleur AND taille=:taille";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':taille',$taille);
			$req->bindValue(':couleur',$couleur);
			$req->bindValue(':quantite',$quantite);
			$req->bindValue(':produit',$produit);
        	    $req->execute();
           
		} 

		catch (Exception $e)
		{
			echo "<br>";
			 echo 'Erreur: '.$e->getMessage();	
			 echo "<br>";
		}


	}

	function supprimerProduitParRef($ref)
	{
		$sql="DELETE from produit where reference=:ref";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':ref',$ref);
			$req->execute();
		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}

	}


	function supprimerDetailsParRef($ref)
	{
		$sql="DELETE from detailsproduit where ref_produit=:ref";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':ref',$ref);
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
	function afficherSizes($ref,$color)
	{
		$sql="SELECT taille FROM detailsproduit WHERE ref_produit=:ref AND couleur=:color AND quantite!=0";
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


	function sortByPriceASC()
	{
		$sql="SELECT * FROM produit ORDER BY prix ASC";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			
			$req->execute();
			$ret=$req->fetchAll();
           	return $ret; 

		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}


	}

function sortByPriceDESC()
	{
		$sql="SELECT * FROM produit ORDER BY prix DESC";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			
			$req->execute();
			$ret=$req->fetchAll();
           	return $ret; 

		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}

	}

function search($query)
	{
		$sql="SELECT * FROM produit";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':search',$query);
			
			$req->execute();
			$ret=$req->fetchAll();
           	return $ret; 

		} 

		catch (Exception $e)
		{
			 echo 'Erreur: '.$e->getMessage();	
		}

	}
	
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

	function totalproduit()
    {
    	$sql="SELECT count(*) as total From produit";
		$db = config3::getConnexion();
		$req=$db->prepare($sql);

		try
		{
			$s=$req->execute();
			$liste=$req->fetch();
			return $liste;
		}
        catch (Exception $e){
        	echo $e->getMessage();
            //die('Erreur: '.$e->getMessage());
        }
    }
    function afficher_produit_page($aa)
    {
    	$sql="select * from produit limit :aa , 10";
		$db = config3::getConnexion();
		$req=$db->prepare($sql);
		
		try{
			
			$req->bindValue(':aa',  $aa, PDO::PARAM_INT);
			$liste=$req->execute();
			return $req->fetchAll();
		}
        catch (Exception $e){
        	echo $e->getMessage();
            //die('Erreur: '.$e->getMessage());
        }
    }
}







  ?>
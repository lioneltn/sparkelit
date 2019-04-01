<?php 
chdir(__DIR__);
include "../config2.php";

class noteC {

	function ajouternote($note){
		$sql="INSERT into note  values (:id_poste,:id_client,:note,:commentaire)";
		$db = config2::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$id_poste=$note->getid_poste();
		$id_client=$note->getid_client();
        $commentaire=$note->getcommentaire();
        $note=$note->getnote();
		$req->bindValue(':id_poste',$id_poste);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':note',$note);
		$req->bindValue(':commentaire',$commentaire);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}



  function affichernote($id_poste){
		
		$sql="SELECT * from note where id_poste=:poste" ;
		$db = config2::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':poste',$id_poste);
		try{
		$liste=$req->execute();
		return $req->fetch();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}


	function moyennenote($id_poste)
	{  
		$sql="SELECT truncate(AVG(note),1) as moyenne from note where id_poste=:poste" ;
			$db = config2::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':poste',$id_poste);
		try{
		$liste=$req->execute();
		return $req->fetch();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	


	

	}

	function nbnoteclientetposte($id_poste,$id_client){
		
		$sql="SELECT count(*) as total from note where id_poste=:poste AND id_client=:client";
		$db = config2::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':poste',$id_poste);
		$req->bindValue(':client',$id_client);
		try
		{
			$req->execute();
			return $req->fetch();
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	

	}
	function noteetcommentaireclientposte($id_poste,$id_client)
	{
		$sql="SELECT note,commantaire from note where id_poste=:poste AND id_client=:client";
		$db = config2::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':poste',$id_poste);
		$req->bindValue(':client',$id_client);
		try
		{
			$req->execute();
			return $req->fetch();
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}

	function modifierclientetposte($id_poste,$id_client,$note,$commentaire)
	{
		
		$sql="UPDATE note set note=:note, commantaire=:commentaire where id_poste=:poste AND id_client=:client";
		$db = config2::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':poste',$id_poste);
		$req->bindValue(':client',$id_client);
		$req->bindValue(':commentaire',$commentaire);
		$req->bindValue(':note',$note);
		try
		{
			$req->execute();
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	

	}
	function nombrecommantaire($id_poste)
	{ 
		$sql="SELECT count(commantaire) as total from note where id_poste=:poste AND commantaire!=:commantaire";
		$db = config2::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':poste',$id_poste);
		$req->bindValue(':commantaire',"");
		try
		{
			$req->execute();
			return $req->fetch();
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	

	}
	function affichercommantaire ($id_poste)
	{ 
		$sql="SELECT commantaire,id_client from note where id_poste=:poste AND commantaire!=:commantaire";
		$db = config2::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':poste',$id_poste);
		$req->bindValue(':commantaire',"");
		try
		{
			$req->execute();
			return $req->fetchAll();
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	

	}

		function affichercommantaireback ($id_poste)
	{ 
		$sql="SELECT * from note where id_poste=:poste";
		$db = config2::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':poste',$id_poste);
		
		try
		{
			$req->execute();
			return $req->fetchAll();
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	

	}
 function nombrenote($id_poste)
	{ 
		$sql="SELECT count(*) as total from note where id_poste=:poste";
		$db = config2::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':poste',$id_poste);
		
		try
		{
			$req->execute();
			return $req->fetch();
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	

	}

	function supprimernote($id_client,$id_poste)
	{
		$sql="DELETE FROM note where id_client=:client AND id_poste=:poste";
		$db = config2::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':poste',$id_poste);
		$req->bindValue(':client',$id_client);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function supprimernoteposte($id_poste)
	{
		$sql="DELETE FROM note where id_poste=:poste";
		$db = config2::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':poste',$id_poste);
		
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

	
	





?>
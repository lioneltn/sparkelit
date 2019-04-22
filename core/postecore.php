<?php 
chdir(__DIR__);
include "../config.php";

class posteC {

	
	function ajouterposte($poste){
		$sql="INSERT into poste  values (NULL,:titre, :description,:image,:date,:id_admin,NULL)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $titre=$poste->gettitre();
        $description=$poste->getdescription();
        $image=$poste->getimage();
        $date=$poste->getdate();
        $id_admin=$poste->getid_admin();
		$req->bindValue(':titre',$titre);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		$req->bindValue(':date',$date);
		$req->bindValue(':id_admin',$id_admin);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherposte($id_poste){
		
		$sql="SELECT * from poste where id_poste=:poste" ;
		$db = config::getConnexion();
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

	function triepostepardate(){
		
		$sql="SELECT * from poste order by date DESC" ;
		$db = config::getConnexion();
		
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}

	function trieposteparnote(){
		
		$sql="SELECT * from poste order by note DESC" ;
		$db = config::getConnexion();
		
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}

	function triepostepardateASC(){
		
		$sql="SELECT * from poste order by date ASC" ;
		$db = config::getConnexion();
		
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}

	function trieposteparnoteASC(){
		
		$sql="SELECT * from poste order by note ASC" ;
		$db = config::getConnexion();
		
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}



	function triepostepardateArtiste($id){
		
		$sql="SELECT * from poste where id_admin=:id order by date DESC" ;
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
		$liste=$req->execute();
		return $req->fetchAll();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}

	function trieposteparnoteArtiste($id){
		
		$sql="SELECT * from poste where id_admin=:id order by note DESC" ;
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
		$liste=$req->execute();
		return $req->fetchAll();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}

	function rechercheposteparnote($titre){
		
		$sql="SELECT * from poste where titre like :titre" ;
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$titre2=$titre."%";
		$req->bindValue(':titre',$titre2);
		try{
		$liste=$req->execute();
		return $req->fetchAll();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}

	function afficherposte_pouradmin(){
		
		$sql="SELECT * From poste";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function afficherposte_pourartiste($id_admin){
		
		$sql="SELECT * from poste where id_admin=:admin" ;
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':admin',$id_admin);
		try{
		$liste=$req->execute();
		return $req->fetchAll();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}

    function typeadmin($id_admin)
    {
       $sql="SELECT type from admin where login=:admin";
       $db = config::getConnexion();
       

		$req=$db->prepare($sql);
		$req->bindValue(':admin',$id_admin);
		try
		{
		$liste=$req->execute();
		$ret=$req->fetch();
		return $ret;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
     }

/*..........................................*/

	function supprimerposte_admin($id_admin){
		$sql="DELETE FROM poste where id_admin=:admin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':admin',$id_admin);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	 function supprimerposte_id($id_poste){
		$sql="DELETE FROM poste where id_poste=:poste";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':poste',$id_poste);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
   
/*------------------------------------*/


    function modifier_poste($poste,$id_poste)
    {
   	   $sql="UPDATE poste SET titre=:titre,description=:description,image=:image,date=:datee WHERE id_poste=:poste";
   	   	$db = config::getConnexion();
        $req=$db->prepare($sql);
		
		try{
		$titre=$poste->gettitre();
        $description=$poste->getdescription();
        $image=$poste->getimage();
        $date=$poste->getdate();
		$req->bindValue(':poste',$id_poste);
		$req->bindValue(':titre',$titre);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		$req->bindValue(':datee',$date);
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
      

    }

     function modifier_note($poste,$note)
    {
    
    	$sql="UPDATE poste SET note=:note WHERE id_poste=:poste";
    	$db = config::getConnexion();
        $req=$db->prepare($sql);
        try
     	{
		
			$req->bindValue(':poste',$poste);
			$req->bindValue(':note',$note);
			$s=$req->execute();
		}
		 catch (Exception $e)
		 {
	            die('Erreur: '.$e->getMessage());
	     }
    }
    function stat_sans_note()
    {
    	$sql="select count(*) as totaln from poste WHERE note is null";
    	$db = config::getConnexion();
    	$req=$db->prepare($sql);
		try{
			$s=$req->execute();
		$liste=$req->fetch();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function id_poste_total()
    {
    	$sql="select id_poste from poste where not note is null";
    	$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }


    function totalpost()
    {
    	$sql="SELECT count(*) as total From poste";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try
		{
			$s=$req->execute();
			$liste=$req->fetch();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficher_post_page($aa)
    {
    	$sql="select * from poste limit :aa , 10";
		$db = config::getConnexion();
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
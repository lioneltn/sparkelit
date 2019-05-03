<?php

chdir(__DIR__);
require_once "../config3.php";
class statsC
{

	
	function get_total_clients(){
        $sql="SELECT COUNT(*) FROM utilisateur";
        $db = config3::getConnexion();
        try
        {
            $liste=$db->query($sql)->fetchColumn();
            return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }   
    }

    function get_trending(){
        $sql="SELECT * FROM produit LIMIT 5";
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

    function get_posts_number(){
        $sql="SELECT COUNT(*) FROM poste";
        $db = config3::getConnexion();
        try
        {
            $liste=$db->query($sql)->fetchColumn();
            return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }   
    }


    function get_total_commands(){
        $sql="SELECT COUNT(*) FROM commande";
        $db = config3::getConnexion();
        try
        {
            $liste=$db->query($sql)->fetchColumn();
            return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }   
    }

    function get_total_price(){
        $sql="SELECT SUM(totalPaiement) FROM commande";
        $db = config3::getConnexion();
        try
        {
            $liste=$db->query($sql)->fetchColumn();
            return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }   
    }



	function get_total_visits(){
		$sql="SELECT COUNT(*) FROM visits";
		$db = config3::getConnexion();
		try
		{
			$liste=$db->query($sql)->fetchColumn();
			return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}

    function get_recent_orders(){
        $sql="SELECT * FROM commande GROUP BY date DESC LIMIT 6";
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


      function get_todo(){
        $sql="SELECT * FROM todo";
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
	
	function get_command_by_week($previous_week,$current_week){
		$sql="SELECT COUNT(*) FROM commande WHERE date BETWEEN :pweek and :cweek";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':cweek',$current_week);
			$req->bindValue(':pweek',$previous_week);
			
        	$req->execute();
			
			$ret=$req->fetchColumn();
           	return $ret; 
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}

		

	

	function get_visits_by_month($month){
		$sql="SElECT COUNT(*) FROM visits WHERE month=:month";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':month',$month);
			
        	$req->execute();
			
			$ret=$req->fetchColumn();
           	return $ret; 
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
      }

      function get_visits_by_week($previous_week,$this_week){
        $sql="SElECT COUNT(*) FROM visits WHERE day BETWEEN :pweek and :cweek";
        $db = config3::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':pweek',$previous_week);
            $req->bindValue(':cweek',$this_week);
            
            $req->execute();
            
            $ret=$req->fetchColumn();
            return $ret; 
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
      }





}	
	
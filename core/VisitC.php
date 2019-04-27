<?php

chdir(__DIR__);
require_once "../config3.php";
class VisitC
{

	function insert_new_visit($visit)
	{
		$sql="insert into visits values (:id,:ip,:country,:year,:month,:day,:device,:browser)";
		$db = config3::getConnexion();
		
        $req=$db->prepare($sql);
		
		$id=$visit->getID();
        $ip=$visit->getIP();
        $country=$visit->getCountry();
        $year=$visit->getYear();
        $month=$visit->getMonth();
        $day=$visit->getDay();
        $device=$visit->getDevice();
        $browser=$visit->getBrowser();

        $req->bindValue(':id',$id);
		$req->bindValue(':ip',$ip);
		$req->bindValue(':country',$country);
		$req->bindValue(':year',$year);
		$req->bindValue(':month',$month);
		$req->bindValue(':day',$day);
		$req->bindValue(':device',$device);
		$req->bindValue(':browser',$browser);
		
            $req->execute();
           
       
		
	}




	function get_total_visits(){
		$sql="SElECT * FROM visits";
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

	function get_visits_by_country(){
		$sql="SELECT country, COUNT(country) as count FROM visits GROUP by country";
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

	function get_visits_by_browser(){
		$sql="SELECT browser, COUNT(browser) as count FROM visits GROUP by browser";
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


		function get_visits_by_device(){
		$sql="SELECT device, COUNT(device) as count FROM visits GROUP by device";
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

	function get_visits_by_year($year){
		$sql="SElECT * FROM visit WHERE year=:year";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':year',$year);
			
        	$req->execute();
			
			$ret=$req->fetch();
           	return $ret; 
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}

	function get_visits_by_month($month){
		$sql="SElECT * FROM visit WHERE year=:year";
		$db = config3::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':year',$year);
			
        	$req->execute();
			
			$ret=$req->fetch();
           	return $ret; 
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
      }
}	
	
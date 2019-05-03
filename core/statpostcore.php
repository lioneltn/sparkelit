<?php 
chdir(__DIR__);
include "../config.php";
class statpostC
{
	function ajoutStat($stat)
	{
		$sql="INSERT into statposte  values (NULL,:sansnote, :sanscommantaire,:aveccommantaire,:date)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);
		
        $sansnote=$stat->getsansnote();
        $sanscommantaire=$stat->getsanscommantaire();
        $aveccommantaire=$stat->getaveccommantaire();
        $date=$stat->getdate();
        $req->bindValue(':sanscommantaire',$sanscommantaire);
		$req->bindValue(':sansnote',$sansnote);
		$req->bindValue(':aveccommantaire',$aveccommantaire);
		$req->bindValue(':date',$date);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherstat()
		{
		$sql="SElECT * From statposte";
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


}

 ?>
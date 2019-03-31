<?php 


include "../../core/config.php";

if(!empty($_POST["login"]) && !empty($_POST["password"]))
{
    extract($_POST);
//      $_SESSION["login"]=login;
//                $_SESSION["password"]=password;
      	$sql="SELECT COUNT(*) as 'nombre'
FROM utilisateur where login=:login and password=:password";
    $db = config::getConnexion();
		try
		{
	     $req=$db->prepare($sql);
        $req->bindValue(':login',$login);
        $req->bindValue(':password',$password);
        if($req->execute()){
            $rows=$req->fetchAll();
            if($rows[0]["nombre"]!='0'){
              
                echo $login;
            }
            else{
                echo "negatif";
            }
        }else{
            echo "negatif";
        }
		
}
    catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	


}
else echo"negatif";

?>

<?php 



include "../../core/config.php";


if(!empty($_POST["login"]) && !empty($_POST["password"]) && !filter_var($_POST["login"], FILTER_VALIDATE_EMAIL) === false)
{
    extract($_POST);
//      $_SESSION["login"]=login;
//                $_SESSION["password"]=password;
      	$sql="SELECT COUNT(*) as 'nombre' FROM utilisateur where email=:email and motdepasse=:motdepasse";
    $db = config::getConnexion();
		try
		{
	     $req=$db->prepare($sql);
        $req->bindValue(':email',$login);
        $req->bindValue(':motdepasse',$password);
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

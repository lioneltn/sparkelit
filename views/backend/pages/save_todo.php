<?php 
require_once "../../../config3.php";
if (isset($_POST['item']) && isset($_POST['id'])){

	$activity = $_POST['item'];
	$id = $_POST['id'];
	$done = 0;
	$sql="insert into todo values (:id,:activity,:done)";
		$db = config3::getConnexion();
		
        $req=$db->prepare($sql);
		
		

        $req->bindValue(':id',$id);
		$req->bindValue(':activity',$activity);
		$req->bindValue(':done',$done);
		
		
            $req->execute();
           
       


}
else{
	echo $_POST['item'];
}


 ?>
<?php 
require_once "../../../config3.php";
if (isset($_POST['id']) && isset($_POST['done'])){

	$id = $_POST['id'];
	
	$done = $_POST['done'];
	$sql="UPDATE todo set done =:done WHERE id=:id";
		$db = config3::getConnexion();
		
        $req=$db->prepare($sql);
		
		

        
		$req->bindValue(':id',$id);
		$req->bindValue(':done',$done);
		
		
            $req->execute();
           
       


}
else{
	echo "Failure";
}
?>
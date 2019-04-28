<?php 
require_once "../../../config3.php";
if (isset($_POST['id'])){

	$id = $_POST['id'];
	
	
	$sql="DELETE FROM todo  WHERE id=:id";
		$db = config3::getConnexion();
		
        $req=$db->prepare($sql);
		
		

        
		$req->bindValue(':id',$id);
		
		
		
            $req->execute();
           
       


}
else{
	echo "Failure";
}
?>
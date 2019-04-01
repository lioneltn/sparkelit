<?php 

class Poste
{
   private $titre;
   private $description;
   private $image;
   private $date;
   private $id_admin;

   function __construct ($titre,$description,$image,$id_admin)

   {
       $this->titre=$titre;
       $this->description=$description;
       $this->image=$image;
       $this->date=date("Y-m-d");
       $this->id_admin=$id_admin;
	}
     function gettitre(){
		return $this->titre;
	}
	function getdescription(){
		return $this->description;
	}
	function getimage(){
		return $this->image;
	}
	function getdate(){
		return $this->date;
	}
	function getid_admin(){
		return $this->id_admin;
	}  
   function settitre($titre){
		$this->titre=$titre;
	}
	function setdescription($description){
		$this->description=$description;
	}
   function setimage($image){
		$this->image=$image;
	}
  function setdate($date){
		$this->date=$date;
	}
   function setid_admin($id_admin){
		$this->id_admin=$id_admin;
	}

}


 ?>


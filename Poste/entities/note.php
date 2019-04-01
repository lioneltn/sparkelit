<?php 

class Note
{
   private $commentaire;
   private $note;
   private $id_client;
   private $id_poste;

   function __construct ($commentaire,$note,$id_client,$id_poste)
   {	
   	   $this->commentaire=$commentaire;
       $this->note=$note;
       $this->id_client=$id_client;
       $this->id_poste=$id_poste;


   }

   function getcommentaire(){
		return $this->commentaire;
	}
	function getnote(){
		return $this->note;
	}
	function getid_client(){
		return $this->id_client;
	}
	function getid_poste(){
		return $this->id_poste;
	}
	

	function setcommentaire($commentaire){
		$this->commentaire=$commentaire;
	}
	function setnote($note){
		$this->note=$note;
	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setid_poste($id_poste){
		$this->id_poste=$id_poste;
	}



}
?>
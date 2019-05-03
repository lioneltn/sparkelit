
<?php
class statpost
{
   private $sansnote;
   private $sanscommantaire;
   private $aveccommantaire;
   private $date;
 

   function __construct ($sansnote,$sanscommantaire,$aveccommantaire)

   {
       $this->sansnote=$sansnote;
       $this->sanscommantaire=$sanscommantaire;
       $this->aveccommantaire=$aveccommantaire;
       date_default_timezone_set("Africa/tunis");
       $this->date=date("Y-m-d H:i:s");

	}
     function getsansnote(){
		return $this->sansnote;
	}
	function getsanscommantaire(){
		return $this->sanscommantaire;
	}
	function getaveccommantaire(){
		return $this->aveccommantaire;
	}
	function getdate(){
		return $this->date;
	}

	

}
?>
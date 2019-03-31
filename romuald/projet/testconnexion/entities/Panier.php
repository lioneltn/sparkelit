
<?php
class Panier
{
	private $idDetail;
	private $quantite;

	function __construct($idDetail,$quantite)
	{
		$this->setIdDetail($idDetail);
		$this->setQuantite($quantite);

	}


	function getIdDetail()
	{
		return $this->idDetail;
	}
    
    function getQuantite()
	{
		return $this->quantite;
	}
    
	function setIdDetail($idDetail)
	{
		 $this->idDetail=$idDetail;
	}
    
    function setQuantite($quantite)
	{
		 $this->quantite=$quantite;
	}
	

}


  ?>

<?php
class Commande
{
	private $totalPaiement;
	private $etat;
	private $dates;
	private $login;
	private $modePaiement;
	function __construct($totalPaiement,$etat,$dates,$login,$modePaiement)
	{
		$this->setTotalPaiement($totalPaiement);
		$this->setEtat($etat);
		$this->setDates($dates);
		$this->setLogin($login);
		$this->setModePaiement($modePaiement);

	}


	function getTotalPaiement()
	{
		return $this->totalPaiement;
	}
    
   
	function getEtat()
	{
		return $this->etat;
	}

	function getDates()
	{
		return $this->dates;
	}
    function getModePaiement()
	{
		return $this->modePaiement;
	}

	function getLogin()
	{
		return $this->login;
	}

 

	function setTotalPaiement($total)
	{
		 $this->totalPaiement=$total;
	}

	function setEtat($Etat)
	{
		 $this->etat=$Etat;
	}

	function setDates($Dates)
	{
		 $this->dates=$Dates;
	}

	function setLogin($login)
	{
		 $this->login=$login;
	}

function setModePaiement($modePaiement)
	{
		 $this->modePaiement=$modePaiement;
	}
 


}


  ?>
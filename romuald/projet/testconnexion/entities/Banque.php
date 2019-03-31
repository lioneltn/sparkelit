
<?php
class Banque
{
	private $cardName;
	private $cardNumber;
	private $expirationMonth;
	private $expirationYear;
	private $CVV;
	private $login;
	function __construct($cardName,$cardNumber,$expirationMonth,$expirationYear,$CVV,$login)
	{
		$this->setCardName($cardName);
		$this->setCardNumber($cardNumber);
		$this->setExpirationMonth($expirationMonth);
		$this->setExpirationYear($expirationYear);
		$this->setCVV($CVV);
		$this-> setLogin($login);

	}


	function getCardName()
	{
		return $this->cardName;
	}
    
    function getCardNumber()
	{
		return $this->cardNumber;
	}
	function getExpirationMonth()
	{
		return $this->expirationMonth;
	}

	function getExpirationYear()
	{
		return $this->expirationYear;
	}
    function getCVV()
	{
		return $this->CVV;
	}

	function getLogin()
	{
		return $this->login;
	}

 

	function setCardName($cardName)
	{
		 $this->cardName=$cardName;
	}
    
    function setCardNumber($cardNumber)
	{
		 $this->cardNumber=$cardNumber;
	}
	function setExpirationMonth($expirationMonth)
	{
		 $this->expirationMonth=$expirationMonth;
	}

	function setExpirationYear($expirationYear)
	{
		 $this->expirationYear=$expirationYear;
	}
    function setCVV($CVV)
	{
		 $this->CVV=$CVV;
	}

	function setLogin($login)
	{
		 $this->login=$login;
	}


}


  ?>
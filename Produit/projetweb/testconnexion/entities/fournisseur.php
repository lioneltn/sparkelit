<?php 
class Fournisseur
{
	private $reference;
	private $ville;
	private $pays;
	private $region;
	private $email;
	private $numero;

	function __construct($reference,$ville,$pays,$region,$email,$numero)
	{
		$this->reference=$reference;
		$this->ville=$ville;
		$this->pays=$pays;
		$this->region=$region;
		$this->email=$email;
		$this->numero=$numero;
	}

	function getreference()
	{
		return $this->reference;
	}

	function getville()
	{
		return $this->ville;
	}

	function getpays()
	{
		return $this->pays;
	}

	function getregion()
	{
		return $this->region;
	}

	function getemail()
	{
		return $this->email;
	}

	function getnumero()
	{
		return $this->numero;
	}

}



 ?>
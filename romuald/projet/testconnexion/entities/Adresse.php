<?php
class Adresse
{
	private $adresse;
	private $ville;
	private $pays;
	private $codePostal;
	private $tel;
	private $region;
	private $login;
	private $private;
	private $companie;
    
	function __construct($adresse,$ville,$pays,$codePostal,$tel,$region,$login,$companie)
	{
		$this->adresse=$adresse;
		$this->ville=$ville;
		$this->pays=pays;
		$this->region=$region;
		$this->codePostal=$codePostal;
		$this->tel=$tel;
		$this->login=$login;
		$this->companie=$companie;

	}

	function getAdresse()
	{
		return $this->adresse;
	}

	function getville()
	{
		return $this->ville;
	}

	function getPays()
	{
		return $this->pays;
	}

	function getRegion()
	{
		return $this->region;
	}

	function getCodePostal()
	{
		return $this->codePostal;
	}
    
    function getLogin()
	{
		return $this->login;
	}
    
        function getTel()
	{
		return $this->tel;
	}
     
        function getCompanie()
	{
		return $this->login;
	}

    function setAdresse($id)
	{
		 $this->adresse=$id;
	}

	function setVille($total)
	{
		 $this->ville=$total;
	}

	function setPays($pays)
	{
		 $this->pays=$pays;
	}

	function setRegion($region)
	{
		 $this->region=$region;
	}

	function setCodePostal($codePostal)
	{
		 $this->codePostal=$codePostal;
	}
function setLogin($login)
	{
		 $this->login=$login;
	}
          function setTel($tel)
	{
		 $this->tel=$tel;
	}
         function setCompanie($companie)
	{
		 $this->companie=$companie;
	}


}


  ?>
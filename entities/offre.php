<?php 
class Offre
{
	private $id;
	private $nom;
	private $desc;
	private $refP;
	private $prix;
    private $prix_anc;
    private $image;
    private $remise;
    private $dateD;
    private $dateF;

	function __construct($id,$nom,$desc,$refP,$prix_anc,$image,$remise,$dateD,$dateF)
	{
		$this->id=$id;
		$this->nom=$nom;	
		$this->desc=$desc;
		$this->refP=$refP;
		
		//$this->prix=$prix;
		$this->remise=$remise;
		$this->prix_anc=$prix_anc;
		$this->image=$image;
		$this->dateD=$dateD;
		$this->dateF=$dateF;

	}

	function getid()
	{
		return $this->id;
	}

	function getnom()
	{
		return $this->nom;
	}

	function getrefP()
	{
		return $this->refP;
	}

	function getdesc()
	{
		return $this->desc;
	}

	function getprix()
	{
		return $this->prix;
	}
	function getimage()
	{
		return $this->image;
	}
	function getprix_anc()
	{
		return $this->prix_anc;
	}
	function getremise()
	{
		return $this->remise;
	}
function getdateD()
	{
		return $this->dateD;
	}
function getdateF()
	{
		return $this->dateF;
	}

}



 ?>
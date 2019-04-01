<?php 
class Offre
{
	private $id;
	private $nom;
	private $idSlider;
	private $desc;
	private $refP;
	private $prix;
    private $prix_anc;
    private $image;

	function __construct($id,$nom,$idSlider,$desc,$refP,$prix,$prix_anc,$image)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->idSlider=$idSlider;
		$this->desc=$desc;
		$this->refP=$refP;
		$this->image=$image;
		$this->prix=$prix;
		$this->prix_anc=$prix_anc;
	}

	function getid()
	{
		return $this->id;
	}

	function getnom()
	{
		return $this->nom;
	}

	function getidSlider()
	{
		return $this->idSlider;
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

}



 ?>
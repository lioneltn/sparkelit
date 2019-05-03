<?php
class Produit
{
	private $nom;
	private $description;
	private $type;
	private $fournisseur;
	private $categorie;
	private $thumbnail;
	private $prix;
	private $reference;
	private $quantite;
	function __construct($nom,$description,$type,$fournisseur,$categorie,$thumbnail,$prix,$reference,$quantite)
	{
		$this->nom=$nom;
		$this->description=$description;
		$this->type=$type;
		$this->fournisseur=$fournisseur;
		$this->categorie=$categorie;
		$this->thumbnail=$thumbnail;
		$this->prix=$prix;
		$this->reference=$reference;
		$this->quantite=$quantite;

	}

	function getnom()
	{
		return $this->nom;
	}

	function getdescription()
	{
		return $this->description;
	}

	function gettype()
	{
		return $this->type;
	}

	function getfournisseur()
	{
		return $this->fournisseur;
	}

	function getcategorie()
	{
		return $this->categorie;
	}

	function getthumbnail()
	{
		return $this->thumbnail;
	}

	function getreference()
	{
		return $this->reference;
	}

	function getprix()
	{
		return $this->prix;
	}

	function getquantite()
	{
		return $this->quantite;
	}


}


  ?>
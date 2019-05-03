
<?php
class ProduitPanier
{
	private $image;
	private $quantite;
	private $couleur;
	private $prix;
	

	function __construct($image,$quantite,$couleur,$prix)
	{
		$this->setImage($image);
		$this->setQuantite($quantite);
		$this->setCouleur($couleur);
		$this->setPrix($prix);

	}


	function getImage()
	{
		return $this->image;
	}
    
    function getQuantite()
	{
		return $this->quantite;
	}
    
	function getCouleur()
	{
		 return $this->couleur;
	}
    function getPrix()
	{
		  return $this->prix;
	}
  
    
    	function setImage($image)
	{
		 $this->image=$image;
	}
    
    function setQuantite($quantite)
	{
		 $this->quantite=$quantite;
	}
    
	function setCouleur($couleur)
	{
		  $this->couleur=$couleur;
	}
    
  	function setPrix($prix)
	{
		  $this->prix=$prix;
	}
	

}


  ?>
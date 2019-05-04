
<?php
class ProduitPanier
{
	private $image;
	private $quantite;
	private $couleur;
	private $prix;
	private $reference;
	private $nom;
	

	function __construct($image,$quantite,$couleur,$prix,$reference,$nom)
	{
		$this->setImage($image);
		$this->setQuantite($quantite);
		$this->setCouleur($couleur);
		$this->setPrix($prix);
		$this->setReference($reference);
		$this->setNom($nom);

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
      function getReference(){
        		  return $this->reference;
    }
  function getNom(){
      return $this->nom;
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
    function setReference($reference){
        		  $this->reference=$reference;
    }
    function setNom($nom){
        $this->nom=$nom;
    }
	

}


  ?>
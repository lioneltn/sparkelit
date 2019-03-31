<?PHP
class Categorie{
	private $nom;
	private $type;
	function __construct($nom,$type){
		$this->nom=$nom;
		$this->type=$type;
	}
	
	function getType(){
		return $this->type;
	}
	function getNom(){
		return $this->nom;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setType($type){
		$this->type=$type;
	}	
}

?>
<?PHP
class Slider{
	private $nom;
	private $ref;
	function __construct($ref,$nom){
		$this->nom=$nom;
		$this->ref=$ref;
	}
	
	function getref()
	{
		return $this->ref;
	}
	function getnom()
	{
		return $this->nom;
	}	
}

?>
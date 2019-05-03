<?PHP
class Metadonnee{
	private $desc;
	private $ref;
	private $logo;
	function __construct($ref,$desc,$logo){
		$this->desc=$desc;
		$this->ref=$ref;
		$this->logo=$logo;
	}
	
	function getref()
	{
		return $this->ref;
	}
	function getdesc()
	{
		return $this->desc;
	}	
	function getlogo()
	{
		return $this->logo;
	}
}

?>
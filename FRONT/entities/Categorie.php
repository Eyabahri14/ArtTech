<?PHP
class Categorie{
	private $Id;
	private $Nom;
	private $Description;
	

	function __construct($id,$nom,$description){
		$this->Id=$id;
		$this->Nom=$nom;
		$this->Description=$description;

	}


	
	function getId(){
		return $this->Id;
	}
	function getNom(){
		return $this->Nom;
	}
	function getDescription(){
		return $this->Description;
	}
    
	
	
	

	function setId($id){
		$this->Id=$id;
	}
	function setNom($nom){
		$this->Nom=$nom;
	}
	function setDescription($description){
		$this->Description=$description;
	}
	

}

?>
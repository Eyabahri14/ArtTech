<?PHP
class Note{
	private $Id;
	private $Titre;
	private $Description;

	function __construct($id,$titre,$description){
		$this->Id=$id;
		$this->Titre=$titre;
		$this->Description=$description;
	}


	
	function getId(){
		return $this->Id;
	}
	function getTitre(){
		return $this->Titre;
	}
	function getDescription(){
		return $this->Description;
	}
	
    

	function setId($id){
		$this->Id=$id;
	}
	function setTitre($titre){
		$this->Titre=$titre;
	}
	function setDescription($description){
		$this->Description=$description;
	}
	
}

?>
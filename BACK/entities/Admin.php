<?PHP
class Admin{
	private $Id;
	private $Nom;
	private $Prenom;
	private $Adresse;
	private $MDP;
	private $Image;

	

	function __construct($id,$nom,$prenom,$adresse,$mdp,$image){
		$this->Id=$id;
		$this->Nom=$nom;
		$this->Prenom=$prenom;
		$this->Adresse=$adresse;
		$this->MDP=$mdp;
		$this->Image=$image;

	}


	
	function getId(){
		return $this->Id;
	}
	function getNom(){
		return $this->Nom;
	}
	function getPrenom(){
		return $this->Prenom;
	}
	function getAdresse(){
		return $this->Adresse;
	}
	function getMDP(){
		return $this->MDP;
	}
	function getImage(){
		return $this->Image;
	}
    
	
	
	

	function setId($id){
		$this->Id=$id;
	}
	function setNom($nom){
		$this->Nom=$nom;
	}
	function setPrenom($prenom){
		$this->Prenom=$prenom;
	}
	function setAdresse($adresse){
		$this->Adresse=$adresse;
	}
	function setMDP($mdp){
		$this->MDP=$mdp;
	}
	function setImage($image){
		 $this->Image=$image;
	}
	

}

?>
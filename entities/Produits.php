<?PHP
class Produits{
	private $Reference;
	private $Nom;
	private $Prix;
	private $ID_fournisseur;
	private $Type;
	private $Description;




	

	function __construct($reference,$nom,$prix,$id_fournisseur,$type,$description){
		$this->Reference=$reference;
		$this->Nom=$nom;
	    $this->Prix=$prix;
	    $this->ID_fournisseur=$id_fournisseur;
	    $this->Type=$type;
	    $this->Description=$description;


	}


	
	function getReference(){
		return $this->Reference;
	}
	function getNom(){
		return $this->Nom;
	}
    function getPrix(){
		return $this->Prix;
	}
	function getID_fournisseur(){
		return $this->ID_fournisseur;
	}
	function getType(){
		return $this->Type;
	}
	function getDescription(){
		return $this->Description;
	}
    
    
    
	
	
	

	function setReference($reference){
		$this->Reference=$reference;
	}
	function setNom($nom){
		$this->Nom=$nom;
	}
	function setPrix($prix){
		$this->Prix=$prix;
	}
	function setID_fournisseur($id_fournisseur){
		$this->ID_fournisseur=$id_fournisseur;
	}
	function setType($type){
		$this->Type=$type;
	}
	function setDescription($description){
		$this->Description=$description;
	}

}

?>
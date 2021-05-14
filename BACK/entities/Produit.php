<?PHP
class Produit{
    private $Id;
	private $Nom;
	private $Type;
	private $Prix;
	private $Quantite;
	private $Description;
	private $image;
	

	function __construct($id,$nom,$type,$prix,$quantite,$description,$image){
		$this->Id=$id;
		$this->Nom=$nom;
		$this->Type=$type;
		$this->Prix=$prix;
		$this->Quantite=$quantite;
		$this->Description=$description;
		$this->Image=$image;

	}


	
	function getId(){
		return $this->Id;
	}
	function getNom(){
		return $this->Nom;
	}
	function getType(){
		return $this->Type;
	}
	function getPrix(){
		return $this->Prix;
	}
	function getDescription(){
		return $this->Description;
	}
    function getQuantite(){
		return $this->Quantite;
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
	function setPrix($prix){
		$this->Prix=$prix;
	}
	function setDescription($description){
		$this->Description=$description;
	}
	function setQuantite($quantite){
		 $this->Quantite=$quantite;
	}
	function setType($type){
		 $this->Type=$type;
	}
	function setImage($image){
		 $this->Image=$image;
	}

}

?>
<?PHP
class Fournisseurs{
	private $ID_fournisseur;
	private $Nom;
	private $Prenom;
	private $Code_Postal;
	private $Numero_tel;
	private $Email;
	private $Societe;





	

	function __construct($id_fournisseur,$nom,$prenom,$code_postal,$numero_tel,$email,$societe){
		$this->ID_fournisseur=$id_fournisseur;
		$this->Nom=$nom;
	    $this->Prenom=$prenom;
	    $this->Code_Postal=$code_postal;
	    $this->Numero_tel=$numero_tel;
	    $this->Email=$email;
	    $this->Societe=$societe;


	}


	
	function getID_fournisseur(){
		return $this->ID_fournisseur;
	}
	function getNom(){
		return $this->Nom;
	}
    function getPrenom(){
		return $this->Prenom;
	}
	function getCode_Postal(){
		return $this->Code_Postal;
	}
	function getNumero_tel(){
		return $this->Numero_tel;
	}
	function getEmail(){
		return $this->Email;
	}
	function getSociete(){
		return $this->Societe;
	}
    
    
    
	
	
	

	function setID_fournisseur($id_fournisseur){
		$this->ID_fournisseur=$id_fournisseur;
	}
	function setNom($nom){
		$this->Nom=$nom;
	}
	function setPrenom($prenom){
		$this->Prenom=$prenom;
	}
	function setCode_Postal($code_postal){
		$this->Code_Postal=$code_postal;
	}
	function setNumero_tel($numero_tel){
		$this->Numero_tel=$numero_tel;
	}
	function setEmail($email){
		$this->Email=$email;
	}
	function setSociete($societe){
		$this->Societe=$societe;
	}

}

?>
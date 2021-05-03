<?php

class livreur{
	private $Cin;
	private $Nom;
	private $Prenom;
	private $Age;
	private $Email;
	private $Telephone;
	private $Ville;
	private $Image;

	function __construct($Cin,$Nom,$Prenom,$Age,$Email,$Telephone,$Ville,$Image){
		$this->Cin=$Cin;
		$this->Nom=$Nom;
		$this->Prenom=$Prenom;
		$this->Age=$Age;
		$this->Email=$Email;
		$this->Telephone=$Telephone;
		$this->Ville=$Ville;
		$this->Image=$Image;
		
	}

	function getCin(){
		return $this->Cin;
	}
    function getNom(){
		return $this->Nom;
	}
	function getPrenom(){
		return $this->Prenom;
	}
    function getAge(){
		return $this->Age;
	}
	function getEmail(){
		return $this->Email;
	}
    function getTelephone(){
		return $this->Telephone;
	}
	function getVille(){
		return $this->Ville;
	}
	function getImage(){
		return $this->Image;
	}
	


}
?>

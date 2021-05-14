<?php

class fournisseur{
	private $Id;
	private $Nom;
	private $Image;
	private $Link;


	function __construct($Nom,$Image,$Link){
		$this->Nom=$Nom;
		$this->Image=$Image;
		$this->Link=$Link;
		
	}
	function getNom(){
		return $this->Nom;
	}
	function getImage(){
		return $this->Image;
	}
	function getLink(){
		return $this->Link;
	}

}

?>
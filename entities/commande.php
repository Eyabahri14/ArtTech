<?php

class Commande{
	private $id;
	private $Adresse;
	private $Ville;
	private $Gouvernaurat;
	private $CodePostale;
	private $ModePaiment;
	private $ModeLivraison;
	private $Prix;

	function __construct($id,$Adresse,$Ville,$Gouvernaurat,$CodePostale,$ModePaiment,$ModeLivraison,$Prix){
		$this->id=$id;
		$this->Adresse=$Adresse;
		$this->Ville=$Ville;
		$this->Gouvernaurat=$Gouvernaurat;
		$this->CodePostale=$CodePostale;
		$this->ModePaiment=$ModePaiment;
		$this->ModeLivraison=$ModeLivraison;
		$this->Prix=$Prix;
		
	}

	function getid(){
		return $this->id;
	}
	function getAdresse(){
		return $this->Adresse;
	}
	function getVille(){
		return $this->Ville;
	}
	function getGouvernaurat(){
		return $this->Gouvernaurat;
	}
	function getCode_Postale(){
		return $this->CodePostale;
	}
	function getMode_Paiment(){
		return $this->ModePaiment;
	}
	function getMode_Livraison(){
		return $this->ModeLivraison;
	}
	function getPrix(){
		return $this->Prix;
	}


	function setid($id){
		$this->id=$id;
	}
	function setAdresse($Adresse){
		$this->Adresse=$Adresse;
	}
	function setVille($Ville){
		$this->Ville=$Ville;
	}
	function setGouvernaurat($Gouvernaurat){
		$this->Gouvernaurat=$Gouvernaurat;
	}
	function setCode_Postale($CodePostale){
		$this->CodePostale=$CodePostale;
	}
	function setMode_Paiment($ModePaiment){
		$this->ModePaiment=$ModePaiment;
	}
	
	function setMode_Livraison($ModeLivraison){
		$this->ModeLivraison=$ModeLivraison;
	}
	function setPrix($Prix){
		$this->Prix=$Prix;
	}
	






}


?>
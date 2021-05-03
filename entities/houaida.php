<?php

class Livraison{
	private $id;
	private $Adresse;
	private $CodePostale;
	private $DateLivraison;
	private $Statut;
	private $ModeLivraison;
	private $Prix;
	private $NomLivreur;
	private $Ville;
	private $ModePaiment;
	private $Gouvernaurat;



	function __construct($id,$Adresse,$CodePostale,$DateLivraison,$Statut,$ModeLivraison,$Prix,$NomLivreur,$Ville,$ModePaiment,$Gouvernaurat){
		$this->id=$id;
		$this->Adresse=$Adresse;
		$this->CodePostale=$CodePostale;
		$this->DateLivraison=$DateLivraison;
		$this->Statut=$Statut;
		$this->ModeLivraison=$ModeLivraison;
		$this->Prix=$Prix;
		$this->NomLivreur=$NomLivreur;
		$this->Ville=$Ville;
		$this->ModePaiment=$ModePaiment;
		$this->Gouvernaurat=$Gouvernaurat;
		
	}
	function getid(){
		return $this->id;
	}
	function getAdresse(){
		return $this->Adresse;
	}
	function getCode_Postale(){
		return $this->CodePostale;
	}
	function getDate_Livraison(){
		return $this->DateLivraison;
	}
	function getStatut(){
		return $this->Statut;
	}
	function getMode_Livraison(){
		return $this->ModeLivraison;
	}
	function getPrix(){
		return $this->Prix;
	}
	function getNom_Livreur(){
		return $this->NomLivreur;
	}
	function getMode_Paiment(){
		return $this->ModePaiment;
	}
	function getVille(){
		return $this->Ville;
	}
	function getGouvernaurat(){
		return $this->Gouvernaurat;
	}
  

	function setid($id){
		$this->id=$id;
	}
	function setAdresse($Adresse){
		$this->Adresse=$Adresse;
	}
	function setCode_Postale($CodePostale){
		$this->CodePostale=$CodePostale;
	}
	function setDate_Livraison($DateLivraison){
		$this->DateLivraison=$DateLivraison;
	}
	function setStatut($Statut){
		$this->Statut=$Statut;
	}
	function setMode_Livraison($ModeLivraison){
		$this->ModeLivraison=$ModeLivraison;
	}
	function setPrix($Prix){
		$this->Prix=$Prix;
	}
	function setNom_Livreur($NomLivreur){
		$this->NomLivreur=$NomLivreur;
	}
	function setVille($Ville){
		$this->Ville=$Ville;
	}
	function setMode_Paiment($ModePaiment){
		$this->ModePaiment=$ModePaiment;
	}
	function setGouvernaurat($Gouvernaurat){
		$this->Gouvernaurat=$Gouvernaurat;
	}


}

?>
<?php 
class Article{
	private $Id;
	private $Titre;
	private $Date_a;
	private $Description;
	private $Image;
	function __construct($Id,$Titre,$Date_a,$Description,$Image){
		$this->Titre=$Titre;
		$this->Description=$Description;
		$this->Image=$Image;
		$this->Id=$Id;
		$this->Date_a=$Date_a;

	}
	
	function getId(){
		return $this->Id;
	}
	function getTitre(){
		return $this->Titre;
	}
	function getDate(){
		return $this->Date_a;
	}
	function getDescription(){
		return $this->Description;
	}
	function getImage(){
		return $this->Image;
	}
	
}
?>
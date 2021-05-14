<?php 
class Commentaire{
	private $Id;
	private $Id_Client;
	private $Date_C;
	private $Description;
	private $Id_Article;
	function __construct($Id,$Id_Client,$Date_C,$Description,$Id_Article){
		$this->Id_Article=$Id_Article;
		$this->Description=$Description;
		$this->Id_Client=$Id_Client;
		$this->Id=$Id;
		$this->Date_C=$Date_C;

	}
	
	function getId(){
		return $this->Id;
	}
	function getId_Client(){
		return $this->Id_Client;
	}
	function getDate(){
		return $this->Date_C;
	}
	function getDescription(){
		return $this->Description;
	}
	function getId_Article(){
		return $this->Id_Article;
	}
	
}
?>
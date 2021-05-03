<?php

class Reminder{

	private $Id;
	private $Titre;
	private $DateR;
	private $Heure;
	

	function __construct($Id,$Titre,$DateR,$Heure){
		$this->Id=$Id;
		$this->Titre=$Titre;
		$this->DateR=$DateR;
		$this->Heure=$Heure;
		
	}

	function getId(){
		return $this->Id;
	}
    function getTitre(){
		return $this->Titre;
	}
	function getDateR(){
		return $this->DateR;
	}
    function getHeure(){
		return $this->Heure;
	}
	
}



?>
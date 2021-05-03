<?php

class client{
 
 private $user_id;
 private $user_name;
 private $user_email;
 private $user_pass;
 private $user_country;
 private $user_city;
 private $user_phone;
 private $user_adresse;
 private $user_image;

 function __construct($user_name,$user_email,$user_pass,$user_country,$user_city,$user_phone,$user_adresse,$user_image){
		$this->user_name=$user_name;
		$this->user_email=$user_email;
		$this->user_pass=$user_pass;
		$this->user_country=$user_country;
		$this->user_city=$user_city;
		$this->user_phone=$user_phone;
		$this->user_adresse=$user_adresse;
		$this->user_image=$user_image;
		
		
	}

	function get_user_name(){
		return $this->user_name;
	}
    function get_user_email(){
		return $this->user_email;
	}
	function get_user_pass(){
		return $this->user_pass;
	}
    function get_user_country(){
		return $this->user_country;
	}
	function get_user_city(){
		return $this->user_city;
	}
    function get_user_phone(){
		return $this->user_phone;
	}
	function get_user_adresse(){
		return $this->user_adresse;
	}
	function get_user_image(){
		return $this->user_image;
	}



}

?>
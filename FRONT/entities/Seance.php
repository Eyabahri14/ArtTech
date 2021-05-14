<?php 
class Seance
{
  
   private $type;
    private $date_debut;
    private $duree;
    private $link;
 private $location;
    function __construct($type, $date_debut, $duree, $link,$location)
    {
        $this->type = $type;
        $this->date_debut = $date_debut;
        $this->duree = $duree;
        $this->link = $link;
        $this->location=$location;
       
     
    }
    function getType()
    {
        return $this->type;
    }
    function getDateDebut()
    {
        return $this->date_debut;
    }

    function getDuree()
    {
        return $this->duree;
    }
    function getLink()
    {
        return $this->link;
    }
    function getLocation(){
return $this->location;

    }
   
  
}

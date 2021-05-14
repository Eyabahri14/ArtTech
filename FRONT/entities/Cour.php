<?php 
class Cour
{
  
    private $category;
    private $teacher;
    private $id_seance;
    private $image;
    private $type;
 
    function __construct($category, $teacher, $id_seance, $image,$type)
    {
        $this->category = $category;
        $this->teacher = $teacher;
        $this->id_seance = $id_seance;
        $this->image = $image;
        $this->type=$type;
       
     
    }
    function getCategory()
    {
        return $this->category;
    }
    function getTeacher()
    {
        return $this->teacher;
    }

    function getIdSeance()
    {
        return $this->id_seance;
    }
    function getImage()
    {
        return $this->image;
    }
    function getType(){
return $this->type;

    }
   
  
}

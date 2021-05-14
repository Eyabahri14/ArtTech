<?php 
class Cour
{
  
    private $name;
    private $category;
    private $teacher;
    private $seance;
    private $image;
    private $type;
    private $rating;

    function __construct($name,$category, $teacher, $seance, $image,$type)
    {
        $this->name = $name;
        $this->category = $category;
        $this->teacher = $teacher;
        $this->seance = $seance;
        $this->image = $image;
        $this->type=$type;
       
     
    }

    public function getName()
    {
        return $this->name;
    }


    function getCategory()
    {
        return $this->category;
    }
    function getTeacher()
    {
        return $this->teacher;
    }

    function getSeance()
    {
        return $this->seance;
    }
    function getImage()
    {
        return $this->image;
    }
    function getType(){
return $this->type;

    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @param mixed $teacher
     */
    public function setTeacher($teacher): void
    {
        $this->teacher = $teacher;
    }

    /**
     * @param mixed $seance
     */
    public function setSeance($seance): void
    {
        $this->seance = $seance;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating): void
    {
        $this->rating = $rating;
    }




   
  
}

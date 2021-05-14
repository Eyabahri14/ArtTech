<?php


class Participation
{
    private $id;
    private $seance;
    private $cour;
    private $user;

    /**
     * Participation constructor.
     */
    public function __construct()
    {
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getSeance()
    {
        return $this->seance;
    }


    public function setSeance($seance): void
    {
        $this->seance = $seance;
    }

    public function getCour()
    {
        return $this->cour;
    }


    public function setCour($cour): void
    {
        $this->cour = $cour;
    }


    public function getUser()
    {
        return $this->user;
    }


    public function setUser($user): void
    {
        $this->user = $user;
    }

    public function toString(): string
    {
        return "id:".$this->id.",seance:".$this->seance.", cour:".$this->cour." user: ".$this->user;
    }


}

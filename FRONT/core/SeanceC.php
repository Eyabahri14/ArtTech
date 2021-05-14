<?php
include "../config.php";


class SeanceC
{
    function addSeance($seance)
    {
        $sql = "insert into seance(type, date_debut, duree, link,location) values (:type, :date_debut, :duree,  :link,:location)";
        $db = config::getConnexion();
        try {

            $req = $db->prepare($sql);

            $type = $seance->getType();
            $date_debut = $seance->getDateDebut();
            $duree = $seance->getDuree();
            $link = $seance->getLink();
            $location = $seance->getLocation();

            $req->bindValue(':type', $type);
            $req->bindValue(':date_debut', $date_debut);
            $req->bindValue(':duree', $duree);
            $req->bindValue(':link', $link);
            $req->bindValue(':location', $location);


           $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function viewSeance()
    {
        $sql = "SELECT * FROM seance";
        $db = config::getConnexion();
        try {

            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function viewSeanceById($id)
    {
        $sql = "SELECT * FROM seance where id=$id";
        $db = config::getConnexion();
        try {

            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
   

    function deleteSeance($id)
    {

        $sql = "DELETE FROM seance where id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function updateSeance($Seance, $id)
    {
        $sql = "UPDATE Seance SET type:=type, date_debut:=date_debut, duree:=duree, link:=link,location:=location where id=:id";

        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $type = $Seance->getType();
            $date_debut = $Seance->getDateDebut();
            $duree = $Seance->getDuree();
            $link = $Seance->getLink();
            $location = $Seance->getLocation();

            $req->bindValue(':type', $type);
            $req->bindValue(':date_debut', $date_debut);
            $req->bindValue(':duree', $duree);
            $req->bindValue(':link', $link);
            $req->bindValue(':location', $location);

            $req->execute();

            // header('Location: index.php');
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }
}

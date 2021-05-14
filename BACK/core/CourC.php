<?php
include "../config.php";


class CourC
{
    function addCour($cour)
    {
        $sql = "insert into cour(name,category, seance, teacher, image,type) values (:name,:category, :seance, :teacher,:image,:type)";
        $db = config::getConnexion();
        try {

            $req = $db->prepare($sql);

            $name = $cour->getName();
            $category = $cour->getCategory();
            $seance = $cour->getSeance();
            $teacher = $cour->getTeacher();
            $image = $cour->getImage();
            $type = $cour->getType();

            $req->bindValue(':name', $name);
            $req->bindValue(':category', $category);
            $req->bindValue(':seance', $seance);
            $req->bindValue(':teacher', $teacher);
            $req->bindValue(':image', $image);
            $req->bindValue(':type', $type);


           $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function viewCour()
    {
        $sql = "SELECT * FROM cour";
        $db = config::getConnexion();
        try {

            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function viewCourById($id)
    {
        $sql = "SELECT * FROM cour where id=$id";
        $db = config::getConnexion();
        try {

            return $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function viewCourByUser($id)
    {
        $sql = "SELECT * FROM cour where u=$id";
        $db = config::getConnexion();
        try {

            return $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function viewCourSearch($category)
    {
        $sql = "SELECT * FROM cour where teacher LIKE '$category' ";
        $db = config::getConnexion();
        try {

            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function deleteCour($id)
    {

        $sql = "DELETE FROM cour where id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function updateCour($cour, $id)
    {
        $sql = "UPDATE cour SET name=:name, category=:category, seance=:seance, teacher=:teacher, image=:image,type=:type where id=:id";

        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $name = $cour->getName();
            $category = $cour->getCategory();
            $seance = $cour->getSeance();
            $teacher = $cour->getTeacher();
            $image = $cour->getImage();
            $type=$cour->getType();

            $req->bindValue(':name', $name);
            $req->bindValue(':category', $category);
            $req->bindValue(':seance', $seance);
            $req->bindValue(':teacher', $teacher);
            $req->bindValue(':image', $image);
            $req->bindValue(':id',$id);
            $req->bindValue(':type', $type);

            $req->execute();

            // header('Location: index.php');
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }

    function updateRating($rating, $id)
    {
//        $newRate = ($oldRating + $rating)/2;
        $sql = "UPDATE cour SET rating=:newRate where id=:id";

        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':newRate', $rating);
            $req->bindValue(':id',$id);

            $req->execute();

            // header('Location: index.php');
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }
}

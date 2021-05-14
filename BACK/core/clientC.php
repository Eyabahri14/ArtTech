<?php

include_once "../config.php";

class ClientC{

	function AfficherClient(){

        $sql="SELECT * From client";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function SupprimerClient($user_id){
        $sql="DELETE FROM client where user_id= :user_id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':user_id',$user_id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

     function RechercheClient($recherche){
      $sql="SELECT * FROM client WHERE user_name LIKE '%$recherche%' LIMIT 10";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


}

?>
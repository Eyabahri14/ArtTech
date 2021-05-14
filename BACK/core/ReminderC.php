<?php
include_once "../config.php";

class ReminderC{

	function AjouterReminder($Reminder){
		$sql="INSERT INTO `reminder` ( `Id`,`Titre`,`DateR` , `Heure`) VALUES (:Id ,:Titre, :DateR , :Heure)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
			$req->bindValue(':Id',$Reminder->getId());
   		    $req->bindValue(':Titre',$Reminder->getTitre());
            $req->bindValue(':DateR',$Reminder->getDateR());
            $req->bindValue(':Heure',$Reminder->getHeure());
            
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

    function AfficherReminder(){

        $sql="SELECT * From reminder";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function SupprimerReminder($Id){
        $sql="DELETE FROM reminder where Id= :Id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':Id',$Id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function CompterNotification(){
        $sql="SELECT count(*) from `reminder` ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        
        try{
            $req->execute();
            return $req;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }



}




?>
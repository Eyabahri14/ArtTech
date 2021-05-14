<?php
include_once "../config.php";

class NoteC{

	function AjouterNote($Note){
		$sql="INSERT INTO `note` ( `Id`,`Titre`,`Description`) VALUES (:Id ,:Titre, :Description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
			$req->bindValue(':Id',$Note->getId());
   		    $req->bindValue(':Titre',$Note->getTitre());
            $req->bindValue(':Description',$Note->getDescription());
            
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

    function AfficherNote(){

        $sql="SELECT * From note";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function SupprimerNote($Id){
        $sql="DELETE FROM note where Id= :Id";
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

    function ModifierNote($Note,$Id){
        $sql="UPDATE note SET Id=:idd, Titre=:Titre,Description=:Description WHERE Id=:Id";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);

        $idd=$Note->getId();
        $Titre=$Note->getNom();
        $Description=$Note->getPrenom();
        
        
        $req->bindValue(':idd',$idd);
        $req->bindValue(':Id',$Id);
        $req->bindValue(':Titre',$Titre);
        $req->bindValue(':Description',$Description);

            $s=$req->execute();
          
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  
        }
        
    }



}




?>
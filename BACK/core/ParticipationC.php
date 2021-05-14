<?php
include_once "../config.php";

class ParticipationC{

	function AjouterParticipation($participation){
		$sql="INSERT INTO `participation` (`seance`,`cour`,`user`) VALUES (:seance, :cour,:user)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

//			$req->bindValue(':id',$participation->getId());
   		    $req->bindValue(':seance',$participation->getSeance());
            $req->bindValue(':cour',$participation->getCour());
            $req->bindValue(':user',$participation->getUser());

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

    function AfficherParticipation(){

        $sql="SELECT * From participation";
        $db = config::getConnexion();
        try{
            return $db->query($sql);
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


    function viewParticipationById($id)
    {
        $sql = "SELECT * FROM participation where id=$id";
        $db = config::getConnexion();
        try {
            return $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function viewParticipationByUser($id)
    {
        $sql = "SELECT * FROM participation where user=$id";
        $db = config::getConnexion();
        try {
            return $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function viewParticipationByCour($id)
    {
        $sql = "SELECT * FROM participation where cour=$id";
        $db = config::getConnexion();
        try {
            return $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function SupprimerParticipation($Id){
        $sql="DELETE FROM participation where Id= :Id";
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

    function ModifierParticipation($participation,$Id){
        $sql="UPDATE participation SET  seance=:seance,cour=:cour,user=:user WHERE Id=:id";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);

        $id=$participation->getId();
        $seance=$participation->getSeance();
        $cour=$participation->getCour();
        $user=$participation->getuser();

        
        $req->bindValue(':id',$id);
        $req->bindValue(':seance',$seance);
        $req->bindValue(':cour',$cour);
        $req->bindValue(':user',$user);

             return $req->execute();
          
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  
        }
        
    }

    public function isUserParticipated( $user,  $cour,  $seance): bool
    {
        $sql = "SELECT * FROM participation where user=$user AND cour=$cour AND seance=$seance";
        $db = config::getConnexion();
        try {
             return $db->query($sql)->rowCount() != 0 ;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }

    }


}






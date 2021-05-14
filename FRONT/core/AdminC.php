<?PHP
include_once "../config.php";
include "../entities/Admin.php";

class AdminC {
	
	function AjouterAdmin($admin){
		$sql="INSERT INTO  admin (Id,Nom,Prenom,Adresse,MDP,Image) VALUES (:Id ,:Nom ,:Prenom ,:Adresse ,:MDP ,:Image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Id=$admin->getId();
        $Nom=$admin->getNom();
        $Prenom=$admin->getPrenom();
        $Adresse=$admin->getAdresse();
        $MDP=$admin->getMDP();
        $Image=$admin->getImage();
      
    
      
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':MDP',$MDP);
        $req->bindValue(':Image',$Image);
	
	
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function AfficherAdmin()
	{
		$sql="SElECT * From admin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function SupprimerAdmin($id){
		$sql="DELETE FROM admin where ID= :Id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	 function ModifierAdmin($admin,$Id){
        $sql="UPDATE admin SET Id=:idd , Nom=:Nom , Prenom=:Prenom , Adresse=:Adresse , MDP=:MDP , Image=:Image WHERE Id=:Id";
        
        $db = config::getConnexion();

    try{        
        $req=$db->prepare($sql);
        $idd=$admin->getId();
        $Nom=$admin->getNom();
        $Prenom=$admin->getPrenom();
        $Image=$admin->getImage();
        $Adresse=$admin->getAdresse();
        $MDP=$admin->getMDP();
      
        
        $req->bindValue(':idd',$idd);
        $req->bindValue(':Id',$Id);
        $req->bindValue(':Nom',$Nom);
        $req->bindValue(':Prenom',$Prenom);
        $req->bindValue(':Adresse',$Adresse);
        $req->bindValue(':MDP',$MDP);
        $req->bindValue(':Image',$Image);
        
        
            $s=$req->execute();
            
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
  
        }
        
    }


	function RecupererAdmin($id){
		$sql="SELECT * from admin where ID='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function RecupererAdresse(){
		$sql="SELECT Adresse from admin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function Verification($adresse,$mdp){
		$sql="SELECT * FROM `admin` WHERE `MDP`='$mdp' AND `Adresse`='$adresse' LIMIT 1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function RecupererMdp($adresse){
		$sql="SELECT MDP , Nom FROM `admin` WHERE `Adresse`='$adresse' LIMIT 1";
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
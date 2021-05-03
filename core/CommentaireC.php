<?PHP
include_once "../config.php";
class CommentaireC {
	
	function AjouterCommentaire($commentaire){
		$sql="INSERT INTO  commentaire (Id,Id_Client,Date_C,Description,Id_Article) VALUES (:Id ,:Id_Client ,:Date_C,:Description,:Id_Article)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Id=$commentaire->getId();
        $Id_Client=$commentaire->getId_Client();
        $Date_C=$commentaire->getDate();
        $Description=$commentaire->getDescription();
        $Id_Article=$commentaire->getId_Article();
 
        
      
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Id_Client',$Id_Client);
		$req->bindValue(':Date_C',$Date_C);
		$req->bindValue(':Id_Article',$Id_Article);
		$req->bindValue(':Description',$Description);
	
	
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function AfficherCommentaire()
	{
		$sql="SElECT * From commentaire";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function SupprimerCommentaire($id){
		$sql="DELETE FROM commentaire where ID= :Id";
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
	function ModifierCommentaire($commentaire,$Id){
        $sql="UPDATE commentaire SET Id=:idd , Description=:Description  WHERE Id=:Id";
        
        $db = config::getConnexion();

    try{        
        $req=$db->prepare($sql);
        $idd=$commentaire->getId();
        $Description=$commentaire->getDescription();
        

        
        $req->bindValue(':idd',$idd);
        $req->bindValue(':Id',$Id);
        $req->bindValue(':Description',$Description);

        
        
            $s=$req->execute();
            
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
  
        }
        
    }


	function RecupererCommentaire($id){
		$sql="SELECT * from commentaire where Id_Article='$id'";
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
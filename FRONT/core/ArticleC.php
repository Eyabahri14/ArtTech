<?PHP
include_once "../config.php";
class ArticleC {
	
	function AjouterArticle($article){
		$sql="INSERT INTO  article (Id,Titre,Date_a,Description,Image) VALUES (:Id ,:Titre ,:Date_a,:Description,:Image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Id=$article->getId();
        $Titre=$article->getTitre();
        $Date_a=$article->getDate();
        $Description=$article->getDescription();
        $Image=$article->getImage();
 
        
      
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Titre',$Titre);
		$req->bindValue(':Date_a',$Date_a);
		$req->bindValue(':Image',$Image);
		$req->bindValue(':Description',$Description);
	
	
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function AfficherArticle()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From article";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function SupprimerArticle($id){
		$sql="DELETE FROM article where ID= :Id";
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
	function ModifierArticle($article,$Id){
        $sql="UPDATE article SET Id=:idd , Titre=:Titre , Description=:Description , Image=:Image   WHERE Id=:Id";
        
        $db = config::getConnexion();

    try{        
        $req=$db->prepare($sql);
        $idd=$article->getId();
        $Titre=$article->getTitre();
        $Description=$article->getDescription();
        $Image=$article->getImage();
        

        
        $req->bindValue(':idd',$idd);
        $req->bindValue(':Id',$Id);
        $req->bindValue(':Titre',$Titre);
        $req->bindValue(':Image',$Image);
        $req->bindValue(':Description',$Description);

        
        
            $s=$req->execute();
            
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
  
        }
        
    }


	function RecupererArticle($id){
		$sql="SELECT * from article where ID='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function RechercheArticle($recherche){
      $sql="SELECT * FROM article WHERE Titre LIKE '%$recherche%' LIMIT 10";
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
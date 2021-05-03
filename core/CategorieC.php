<?PHP
include_once "../config.php";
include "../entities/Categorie.php";

class CategorieC {
	
	function ajouterCategorie($categorie){
		$sql="INSERT INTO  Categorie (Id,Nom,Description) VALUES (:Id ,:Nom ,:Description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Id=$categorie->getId();
        $Nom=$categorie->getNom();
        $Description=$categorie->getDescription();
        
        
      
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Description',$Description);
	
	
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function AfficherCategorie()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function SupprimerCategorie($id){
		$sql="DELETE FROM categorie where ID= :Id";
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
	function ModifierCategorie($categorie,$Id){
        $sql="UPDATE categorie SET Id=:idd , Nom=:Nom , Description=:Description   WHERE Id=:Id";
        
        $db = config::getConnexion();

    try{        
        $req=$db->prepare($sql);
        $idd=$categorie->getId();
        $Nom=$categorie->getNom();
        $Description=$categorie->getDescription();
      
        
        $req->bindValue(':idd',$idd);
        $req->bindValue(':Id',$Id);
        $req->bindValue(':Nom',$Nom);
        $req->bindValue(':Description',$Description);

        
        
            $s=$req->execute();
            
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
  
        }
        
    }


	function RecupererCategorie($id){
		$sql="SELECT * from categorie where ID='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	 function RechercheCategorie($recherche){
      $sql="SELECT * FROM categorie WHERE Nom LIKE '%$recherche%' LIMIT 10";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function CompterProduit($categ){
        $sql="SELECT count(*) from `produit` where Type='$categ'";
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
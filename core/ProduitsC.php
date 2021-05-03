<?PHP
include_once __DIR__ ."/../config.php";
include __DIR__ ."/../entities/Produits.php";

class ProduitsC {
	
	public function AjouterProduits($Produits){
		$sql="INSERT INTO  Produits (Reference,Nom,Prix,ID_fournisseur,Type,Description) VALUES (:Reference , :Nom , :Prix , :ID_fournisseur , :Type , :Description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $req->bindValue('Reference',$Produits->getReference());
        $req->bindValue('Nom',$Produits->getNom());
        $req->bindValue('Prix',$Produits->getPrix());
        $req->bindValue('ID_fournisseur',$Produits->getID_fournisseur());
        $req->bindValue('Type',$Produits->getType());
        $req->bindValue('Description',$Produits->getDescription());
        
        
	
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	public function AfficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";//NomFrs alias du champ Nom dans fournisseurs
		$sql="SElECT Produits.*, fournisseurs.Nom as NomFrs  From Produits 
		inner join fournisseurs on fournisseurs.ID_fournisseur = Produits.ID_fournisseur";//pour chercher de la table fournisseur le Nom_fournisseur
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	public function AfficherProduitsType($Type,$Prix,$Ordre){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";//NomFrs alias du champ Nom dans fournisseurs
		//echo "<h1>Type: $Type Ordre: $Ordre</h1>";
		$sql="SElECT Produits.*, fournisseurs.Nom as NomFrs  From Produits 
		inner join fournisseurs on fournisseurs.ID_fournisseur = Produits.ID_fournisseur
		where 1=1";
		if($Type !='')
			$sql.=" and Produits.type = :type";
		if($Prix !='')
			$sql.=" and Produits.prix <= :prix";
		
		if($Ordre != '')
			$sql.=' order by '.$Ordre;//pour chercher de la table fournisseur le Nom_fournisseur
		
		//echo $sql;
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		if($Type !='')
			$req->bindValue(':type',$Type);
		if($Prix !='')
			$req->bindValue(':prix',$Prix);
		$req->execute();
        $liste = $req->fetchAll();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	public function ChercherProduits($Reference){ 
		$sql="SELECT * FROM Produits where Reference= :Reference";
		$db = config::getConnexion();
		$req=$db->prepare($sql);//avec parametre
		$req->bindValue(':Reference',$Reference);
		try{
			$req->execute();
			return $req->fetch();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}

	}

	function Count(){
		$sql="SELECT COUNT(*) as nbproduits FROM Produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
        return $liste->fetch()['nbproduits'];
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function SupprimerProduits($Reference){
		$sql="DELETE FROM Produits where Reference= :Reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Reference',$Reference);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	public function ModifierProduits($Produits){
	$sql="UPDATE  Produits SET Nom=:Nom,Prix=:Prix,ID_fournisseur=:ID_fournisseur,Type=:Type,Description=:Description WHERE Reference=:Reference";
	$db = config::getConnexion();
	try{
	$req=$db->prepare($sql);
	
	$req->bindValue('Reference',$Produits->getReference());
	$req->bindValue('Nom',$Produits->getNom());
	$req->bindValue('Prix',$Produits->getPrix());
	$req->bindValue('ID_fournisseur',$Produits->getID_fournisseur());
	$req->bindValue('Type',$Produits->getType());
	$req->bindValue('Description',$Produits->getDescription());
	
	

	$req->execute();
	   
	}
	catch (Exception $e){
		echo 'Erreur: '.$e->getMessage();
	}
        
    }
	
	
}
?>
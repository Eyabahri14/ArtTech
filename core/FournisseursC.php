<?PHP
include_once "../config.php";
include "../entities/Fournisseurs.php";

class FournisseursC {
    
    function ajouterFournisseurs($fournisseurs){
        $sql="INSERT INTO  fournisseurs (ID_fournisseur,Nom,Prenom,Code_Postal,Numero_tel,Email,Societe) VALUES (:ID_fournisseur ,:Nom ,:Prenom ,:Code_Postal ,:Numero_tel ,:Email ,:Societe)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $req->bindValue(':ID_fournisseur',$fournisseurs->getID_fournisseur());
        $req->bindValue(':Nom',$fournisseurs->getNom());
        $req->bindValue(':Prenom',$fournisseurs->getPrenom());
        $req->bindValue(':Code_Postal',$fournisseurs->getCode_Postal());
        $req->bindValue(':Numero_tel',$fournisseurs->getNumero_tel());
        $req->bindValue(':Email',$fournisseurs->getEmail());
        $req->bindValue(':Societe',$fournisseurs->getSociete());

        
    
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }

    function Count(){
        $sql="SELECT COUNT(*) as nbfournisseurs FROM Fournisseurs";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste->fetch()['nbfournisseurs'];
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    public function ChercherFournisseurs($ID_fournisseur){ 
		$sql="SELECT * FROM Fournisseurs where ID_fournisseur= :ID_fournisseur";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':ID_fournisseur',$ID_fournisseur);
		try{
			$req->execute();
			return $req->fetch();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}

	}
	
	public function CpFournisseurs(){ 
		$sql="SELECT distinct Code_Postal FROM Fournisseurs";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		
		try{
			$req->execute();
			return $req->fetchAll();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}

	}
    
    public function AfficherFournisseursFiltre($societe, $Cp, $Tri){
        $sql="SELECT * FROM Fournisseurs where 1=1 ";
        if($societe != '')
            $sql .='  and societe like :societe' ;
        if($Cp != '')
            $sql .='  and Code_Postal = :cp' ;
        if($Tri != '')
            $sql .=' order by '.$Tri;

        $db = config::getConnexion();
        $req=$db->prepare($sql);
		
        if($Cp != '')
			$req->bindValue(':cp', $Cp);
		
        if($societe != '')
			$req->bindValue(':societe','%'.$societe.'%');
		
        try{
            $req->execute();
            return $req->fetchAll();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
	function AfficherFournisseurs(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From fournisseurs";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
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

    /*function Count(){
        $sql="SELECT COUNT(*) as nbproduits FROM Produits";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }*/



    function SupprimerFournisseurs($id_fournisseur){
        $sql="DELETE FROM fournisseurs where ID_fournisseur= :ID_fournisseur";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':ID_fournisseur',$id_fournisseur);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function ModifierFournisseurs($fournisseurs){
        $sql="UPDATE fournisseurs SET Nom=:nom , Prenom=:prenom , Code_Postal=:code_postal , Numero_tel=:numero_tel , Email=:email , Societe=:societe  WHERE ID_fournisseur=:ID_fournisseur";
       

        $db = config::getConnexion();

    try{        
        $req=$db->prepare($sql);
        $id_fournisseur=$fournisseurs->getID_fournisseur();
        $nom=$fournisseurs->getNom();
        $prenom=$fournisseurs->getPrenom();
        $code_postal=$fournisseurs->getCode_Postal();
        $numero_tel=$fournisseurs->getNumero_tel();
        $email=$fournisseurs->getEmail();
        $societe=$fournisseurs->getSociete();



      
        //echo "<h1>id_fournisseur $id_fournisseur nom $nom</h1>";
        $req->bindValue(':ID_fournisseur',$id_fournisseur);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':code_postal',$code_postal);
        $req->bindValue(':numero_tel',$numero_tel);
        $req->bindValue(':email',$email);
        $req->bindValue(':societe',$societe);



        
        
         $retour=$req->execute();
         return $retour;
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
  
        }
         

         }


    
    
    
}

?>
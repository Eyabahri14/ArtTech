<?php  

include_once "../config.php";

class LivraisonC{
  		
  		function ajouterLivraison($livraison){
		$sql="insert into livraison (id,Adresse,CodePostale,DateLivraison,Statut,ModeLivraison,Prix,NomLivreur,Ville,ModePaiment,Gouvernaurat) values (:id,:Adresse,:CodePostale,:DateLivraison,:Statut,:ModeLivraison,:Prix,:NomLivreur,:Ville,:ModePaiment,:Gouvernaurat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
       
        
		$req->bindValue(':id',$livraison->getid());
		$req->bindValue(':Adresse',$livraison->getAdresse());
		$req->bindValue(':CodePostale',$livraison->getCode_Postale());
		$req->bindValue(':DateLivraison',$livraison->getDate_Livraison());
		$req->bindValue(':Statut',$livraison->getStatut());
		$req->bindValue(':ModeLivraison',$livraison->getMode_Livraison());
		$req->bindValue(':Prix',$livraison->getPrix());
        $req->bindValue(':NomLivreur',$livraison->getNom_Livreur());
        $req->bindValue(':Ville',$livraison->getVille());
        $req->bindValue(':ModePaiment',$livraison->getMode_Paiment());
        $req->bindValue(':Gouvernaurat',$livraison->getGouvernaurat());

		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	 function AfficherLivraison(){

        $sql="SELECT * From livraison";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function SupprimerLivraison($id){
        $sql="DELETE FROM livraison where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function ModifierLivraison($livraison,$id){

     $sql="UPDATE livraison SET id=:idd, Adresse=:Adresse,CodePostale=:CodePostale,DateLivraison=:DateLivraison,Statut=:Statut,ModeLivraison=:ModeLivraison,Prix=:Prix,NomLivreur=:NomLivreur WHERE id=:id";
        
        $db = config::getConnexion();
        
     try{        
        $req=$db->prepare($sql);

        $idd=$livraison->getid();
        $Adresse=$livraison->getAdresse();
        $CodePostale=$livraison->getCode_Postale();
        $DateLivraison=$livraison->getDate_Livraison();
        $Statut=$livraison->getStatut();
        $ModeLivraison=$livraison->getMode_Livraison();
        $Prix=$livraison->getPrix();
        $NomLivreur=$livraison->getNom_Livreur();
        
        $req->bindValue(':idd',$idd);
        $req->bindValue(':id',$id);
        $req->bindValue(':Adresse',$Adresse);
        $req->bindValue(':CodePostale',$CodePostale);
        $req->bindValue(':DateLivraison',$DateLivraison);
        $req->bindValue(':Statut',$Statut);
        $req->bindValue(':ModeLivraison',$ModeLivraison);
        $req->bindValue(':Prix',$Prix);
        $req->bindValue(':NomLivreur',$NomLivreur);

        
        
            $s=$req->execute();
            
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
        }
        
    }

    function RecupererLivraison($id){
        $sql="SELECT * from livraison where id='$id'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function RecupererLivreur(){
        $sql="SELECT * from livreur ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function RecupererCommande($id){
        $sql="SELECT * from commande where id='$id'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function RecupererAdresseLivreur($Nom,$Prenom){
        $sql="SELECT Email from livreur where Nom='$Nom' and Prenom='$Prenom'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function miseAjour($Nom,$Prenom){
        $sql="UPDATE livreur SET  Etat=1   WHERE Nom='$Nom' and Prenom='$Prenom'";
        
        $db = config::getConnexion();

    try{        
        $req=$db->prepare($sql);
      
        
        $req->bindValue(':Nom',$Nom);
        $req->bindValue(':Prenom',$Prenom);
        
        
            $s=$req->execute();
            
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
  
        }
    }

    function miseAjourSup($Nom,$Prenom){
        $sql="UPDATE livreur SET  Etat=0   WHERE Nom='$Nom' and Prenom='$Prenom'";
        
        $db = config::getConnexion();

    try{        
        $req=$db->prepare($sql);
      
        
        $req->bindValue(':Nom',$Nom);
        $req->bindValue(':Prenom',$Prenom);
        
        
            $s=$req->execute();
            
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
  
        }
    }
    function SupprimerCommande($id){
        $sql="DELETE FROM commande where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function RechercheLivraison($recherche){
      $sql="SELECT * FROM livraison WHERE DateLivraison LIKE '%$recherche%' LIMIT 10";
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
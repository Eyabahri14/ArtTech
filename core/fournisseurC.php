<?php

include_once "../config.php";

class fournisseurC{

	function AjoutFournisseur($fournisseur){
		$sql="INSERT INTO `fournisseur` ( `Nom`,`Image`,`Link`) VALUES ( :Nom, :Image,:Link)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
   		   
            $req->bindValue(':Nom',$fournisseur->getNom());
            $req->bindValue(':Image',$fournisseur->getImage());
            $req->bindValue(':Link',$fournisseur->getLink());
           
          
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

    function AfficherFournisseur(){

        $sql="SELECT * From fournisseur";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function SupprimerFournisseur($Nom){
        $sql="DELETE FROM fournisseur where Nom= :Nom";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':Nom',$Nom);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function RechercheFournisseur($recherche){
      $sql="SELECT * FROM fournisseur WHERE Nom LIKE '%$recherche%' LIMIT 10";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function TrierNomFournisseur(){
        $sql="SELECT * FROM fournisseur ORDER BY Nom ASC";
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
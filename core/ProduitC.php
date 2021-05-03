<?php
include_once "../config.php";

class ProduitC{


    function RecupererProduit($v){
    $sql="SELECT * From produit where Id='$v'";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    }


    function RecupererCategorie()
    {
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


    function AjouterProduit($Produit){
        $sql="INSERT INTO `produit` (`Nom`,`Type`,`Prix`, `Quantite`,`Description`,`Image`) VALUES (:Nom, :Type, :Prix, :Quantite,:Description, :Image)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
            $req->bindValue(':Nom',$Produit->getNom());
            $req->bindValue(':Type',$Produit->getType());
            $req->bindValue(':Prix',$Produit->getPrix());
            $req->bindValue(':Quantite',$Produit->getQuantite());
            $req->bindValue(':Description',$Produit->getDescription());
            $req->bindValue(':Image',$Produit->getImage());

        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }


    function AfficherProduit(){

        $sql="SELECT * From produit";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


    function SupprimerProduit($Id){
        $sql="DELETE FROM produit where Id= '$Id'";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':Id',$Id);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function ModifierProduit($produit,$Id){
        $sql="UPDATE produit SET Id=:idd , Nom=:Nom , Type=:Type , Prix=:Prix , Quantite=:Quantite , Description=:Description , Image=:Image   WHERE Id=:Id";
        
        $db = config::getConnexion();

    try{        
        $req=$db->prepare($sql);
        $idd=$produit->getId();
        $Nom=$produit->getNom();
        $Prix=$produit->getPrix();
        $Image=$produit->getImage();
        $Quantite=$produit->getQuantite();
        $Description=$produit->getDescription();
        $Type=$produit->getType();
      
        
        $req->bindValue(':idd',$idd);
        $req->bindValue(':Id',$Id);
        $req->bindValue(':Nom',$Nom);
        $req->bindValue(':Prix',$Prix);
        $req->bindValue(':Image',$Image);
        $req->bindValue(':Description',$Description);
        $req->bindValue(':Quantite',$Quantite);
        $req->bindValue(':Type',$Type);
        
        
            $s=$req->execute();
            
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
  
        }
        
    }


    function RechercheProduit($recherche){
      $sql="SELECT * FROM produit WHERE Nom LIKE '%$recherche%' LIMIT 10";
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
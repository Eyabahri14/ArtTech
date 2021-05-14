<?php
include_once "../config.php";

class livreurC{

	function AjouterLivreur($livreur){
		$sql="INSERT INTO `livreur` (`Cin`, `Nom`,`Prenom`, `Age`,`Email`, `Telephone`, `Ville`, `Image`) VALUES (:Cin, :Nom, :Prenom, :Age, :Email,:Telephone,:Ville,:Image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
   		    $req->bindValue(':Cin',$livreur->getCin());
            $req->bindValue(':Nom',$livreur->getNom());
            $req->bindValue(':Prenom',$livreur->getPrenom());
            $req->bindValue(':Age',$livreur->getAge());
            $req->bindValue(':Email',$livreur->getEmail());
            $req->bindValue(':Telephone',$livreur->getTelephone());
            $req->bindValue(':Ville',$livreur->getVille());
            $req->bindValue(':Image',$livreur->getImage());
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

    function AfficherLivreur(){

        $sql="SELECT * From livreur";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function SupprimerLivreur($Cin){
        $sql="DELETE FROM livreur where Cin= :Cin";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':Cin',$Cin);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function ModifierLivreur($livreur,$Cin){
        $sql="UPDATE livreur SET Cin=:cinn, Nom=:Nom,Prenom=:Prenom,Age=:Age,Email=:Email,Telephone=:Telephone,Ville=:Ville,Etat=:Etat WHERE Cin=:Cin";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);

        $cinn=$livreur->getCin();
        $Nom=$livreur->getNom();
        $Prenom=$livreur->getPrenom();
        $Age=$livreur->getAge();
        $Email=$livreur->getEmail();
        $Telephone=$livreur->getTelephone();
        $Ville=$livreur->getVille();
        
        $req->bindValue(':cinn',$cinn);
        $req->bindValue(':Cin',$Cin);
        $req->bindValue(':Nom',$Nom);
        $req->bindValue(':Prenom',$Prenom);
        $req->bindValue(':Age',$Age);
        $req->bindValue(':Email',$Email);
         $req->bindValue(':Telephone',$Telephone);
        $req->bindValue(':Ville',$Ville);
        $req->bindValue(':Etat',$Etat);

        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
//  print_r($datas);
        }
        
    }

    function RecupererLivreur($Cin){
        $sql="SELECT * from livreur where Cin='$Cin'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function RechercheLivreur($recherche){
      $sql="SELECT * FROM livreur WHERE Nom LIKE '%$recherche%' LIMIT 10";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }   

    function TrierParNom(){
        $sql="SELECT * FROM livreur ORDER BY Nom ASC";
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
<?php
include "../core/livreurC.php";
include "../entities/livreur.php";

if(isset($_POST['Cin']) and isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Age']) and isset($_POST['Email']) and isset($_POST['Telephone']) and isset($_POST['Ville'])  )
{

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["Image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   $livreur1C = new livreurC();
   
    $livreur1 = new livreur($_POST['Cin'],$_POST['Nom'],$_POST['Prenom'],$_POST['Age'],$_POST['Email'],$_POST['Telephone'],$_POST['Ville'],$target_file);
  
   
    $livreur1C->AjouterLivreur($livreur1);
     $test=1;
    echo ("<script language='javascript'>window.location.href='AfficherLivreur.php?notification=$test'</script>");
   
}
else
{ 
   $test=2;
    echo ("<script language='javascript'>window.location.href='AfficherLivreur.php?notification=$test'</script>");
   }
	
?>

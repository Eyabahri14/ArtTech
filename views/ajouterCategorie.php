<?php
include_once "../core/CategorieC.php";
include_once "../entities/Categorie.php";

if(isset($_POST['Nom']) and isset($_POST['Description']))
{  
	$Id="";
    $Categorie1C = new CategorieC();
    $Categorie1 = new Categorie($Id,$_POST['Nom'],$_POST['Description']);
    $Categorie1C->AjouterCategorie($Categorie1);
    //header('Location:mailing.php');
    $test=1;
    echo ("<script language='javascript'>window.location.href='AfficherCategorie.php?notification=$test'</script>");

  }else{
    echo "fail";
  }

    ?>

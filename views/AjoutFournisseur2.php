<?php

include_once "../core/fournisseurC.php";
include_once "../entities/fournisseur.php";

if (isset($_POST['Nom']) and isset($_POST['Link'])){

$target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["Image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$fournisseur1C=new fournisseurC();
$fournisseur1= new fournisseur ($_POST['Nom'],$target_file,$_POST['Link']);
$fournisseur1C->AjoutFournisseur($fournisseur1);

$test=3;
    echo ("<script language='javascript'>window.location.href='AfficherFournisseur.php?notification=$test'</script>");
	
}else{
	
   $test=4;
    echo ("<script language='javascript'>window.location.href='AfficherFournisseur.php?notification=$test'</script>");
}

?>
<?php

include_once "../core/fournisseurC.php";

$fournisseur1C=new fournisseurC();
if (isset($_POST["Nom"])){
  
  $fournisseur1C->SupprimerFournisseur($_POST["Nom"]);
  echo"succes";
  //header('Location: AfficherLivreur.php');
   $test=1;
    echo ("<script language='javascript'>window.location.href='AfficherFournisseur.php?notification=$test'</script>");
}
else{
	$test=2;
    echo ("<script language='javascript'>window.location.href='AfficherFournisseur.php?notification=$test'</script>");
}



?>
<?php

include_once "../core/houaidaC.php";
include_once "../entities/houaida.php";

if (isset($_POST['Ref']) and isset($_POST['Adresse']) and isset($_POST['CodePostale']) and isset($_POST['DateLivraison']) and isset($_POST['Statut']) and isset($_POST['ModeLivraison']) and isset($_POST['Prix']) ){
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1C=new LivraisonC();
$livrasion1= new Livraison ($_POST['Ref'],$_POST['Adresse'],$_POST['CodePostale'],$_POST['DateLivraison'],$_POST['Statut'],$_POST['ModeLivraison'],$_POST['Prix'],$_POST['NomLivreur']);
$livraison1C->ajouterLivraison($livrasion1);

//header('Location: AfficherLivraison.php');
	$test=1;
	 echo ("<script language='javascript'>window.location.href='AfficherLivraison.php?notification=$test'</script>");
}else{
	$test=2;
	echo ("<script language='javascript'>window.location.href='AfficherLivraison.php?notification=$test'</script>");
}

?>
<?php
session_start();
include_once "../core/AdminC.php";
include_once "../entities/Admin.php";
if(isset($_POST['Email2']))
{  
    $adresse=$_POST['Email2'];
    $Admin1C = new AdminC();
    $listeMdp=$Admin1C->RecupererMdp($adresse);
    foreach($listeMdp as $row){
        $mdp=$row['MDP'];
        $nom=$row['Nom'];
        $_SESSION['MOTDEPASSE']=$mdp;
        $_SESSION['USERNAME']=$nom;
    echo ("<script language='javascript'>window.location.href='MailingMdp.php?email=$adresse'</script>");
    }
}
?>
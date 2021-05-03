<?php
session_start();
include_once "../core/CommentaireC.php";
include_once "../entities/Commentaire.php";
 $IdAdmin=$_SESSION['UID'];
if(isset($_POST['IdArticle']) and isset($_POST['Description']))
{  
	$Id="";
    $Desc=$_POST['Description']."         (administrateur)";
    $Date_C =Date('Y-m-d H:i:s');
    $Commentaire1C = new CommentaireC();
    $Commentaire1 = new Commentaire($Id,$IdAdmin,$Date_C,$Desc,$_POST['IdArticle']);
    $Commentaire1C->AjouterCommentaire($Commentaire1);
    $test=1;
    echo ("<script language='javascript'>window.location.href='AfficherArticle.php?notification=$test'</script>");

  }else{
    echo "fail";
  }

    ?>

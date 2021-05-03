<?php
include_once "../core/NoteC.php";
include_once "../entities/Note.php";

if(isset($_POST['TitreNote']) and isset($_POST['DescriptionNote']))
{  
    $Id="";
    $Note1C = new NoteC();
    $Note1 = new Note($Id,$_POST['TitreNote'],$_POST['DescriptionNote']);
    $Note1C->AjouterNote($Note1);
    echo ("<script language='javascript'>window.location.href='Acceuil.php'</script>");

  }else{
    echo "fail";
  }

    ?>

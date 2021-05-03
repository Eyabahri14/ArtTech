<?php
include_once "../core/ReminderC.php";
include_once "../entities/Reminder.php";

if(isset($_POST['NomReminder']) and isset($_POST['DateReminder']) and isset($_POST['HeureReminder']))
{  
    $Id="";
    $Reminder1C = new ReminderC();
    $Reminder1 = new Reminder($Id,$_POST['NomReminder'],$_POST['DateReminder'],$_POST['HeureReminder']);
    $Reminder1C->AjouterReminder($Reminder1);
    echo ("<script language='javascript'>window.location.href='Acceuil.php'</script>");

  }else{
    echo "fail";
  }

    ?>

<?php

include_once "../core/ReminderC.php";

$Reminder1C=new ReminderC();
$Reminder1C->SupprimerReminder($_GET["IdR"]);
echo ("<script language='javascript'>window.location.href='Acceuil.php'</script>");

?>
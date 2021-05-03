<?php

include_once "../core/NoteC.php";

$note1C=new NoteC();
$note1C->SupprimerNote($_GET["Id"]);
echo ("<script language='javascript'>window.location.href='Acceuil.php'</script>");
?>
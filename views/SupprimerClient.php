<?php

include_once "../core/clientC.php";

$client1C=new ClientC();

  $client1C->SupprimerClient($_GET["Id"]);
  $test=3;
  echo ("<script language='javascript'>window.location.href='AfficherClient.php?notification=$test'</script>");




?>
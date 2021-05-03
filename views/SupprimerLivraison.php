<?php

include "../core/houaidaC.php";
if(isset($_GET["id"])){
$livraisonC= new LivraisonC();

$livraisonC->SupprimerLivraison($_GET['id']);
$var=$_GET['nom'];

     function before ($this, $inthat)
    {
        return substr($inthat, 0, strpos($inthat, $this));
    };
     function after ($this, $inthat)
    {
        if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat,$this)+strlen($this));
    };

    $name=before(' ',$var);
    $lastname=after(' ',$var);
   $livraisonC->miseAjourSup($name,$lastname);
    $test=1;
    echo ("<script language='javascript'>window.location.href='AfficherLivraison.php?notification=$test'</script>");
  //header('Location: AfficherLivraison.php');
}else
{
  $test=2;
    echo ("<script language='javascript'>window.location.href='AfficherLivraison.php?notification=$test'</script>");
}

?>
<?PHP
include "../core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["Cin"])){
  
  $livreurC->SupprimerLivreur($_POST["Cin"]);
   $test=1;
    echo ("<script language='javascript'>window.location.href='AfficherLivreur.php?sup=$test'</script>");
}
else{
	$test=2;
    echo ("<script language='javascript'>window.location.href='AfficherLivreur.php?sup=$test'</script>");
}

?>
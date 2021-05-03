<?PHP
include "../core/ProduitC.php";
$produitC=new ProduitC();
if (isset($_GET["Id"]))
{
$produitC->SupprimerProduit($_GET["Id"]);
 $test=2;
    echo ("<script language='javascript'>window.location.href='AfficherProduit.php?notification=$test'</script>");
}else{
	$test=-1;
    echo ("<script language='javascript'>window.location.href='AfficherProduit.php?notification=$test'</script>");
}

?>

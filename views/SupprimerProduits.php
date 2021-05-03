<?PHP
include "../core/ProduitsC.php";
$uc=new ProduitsC();
if (isset($_POST["Reference"]))
{
$uc->SupprimerProduits($_POST["Reference"]);
 $test=2;
    echo ("<script language='javascript'>window.location.href='AfficherProduits.php?notification=$test'</script>");
}else{
	$test=-1;
    echo ("<script language='javascript'>window.location.href='AfficherProduits.php?notification=$test'</script>");
}

?>

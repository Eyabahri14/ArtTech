<?PHP
include "../core/FournisseursC.php";
$uc=new FournisseursC();
if (isset($_POST["ID_fournisseur"]))
{
$uc->SupprimerFournisseurs($_POST["ID_fournisseur"]);
 $test=2;
    echo ("<script language='javascript'>window.location.href='AfficherFournisseurs.php?notification=$test'</script>");
}else{
	$test=-1;
    echo ("<script language='javascript'>window.location.href='AfficherFournisseurs.php?notification=$test'</script>");
}

?>

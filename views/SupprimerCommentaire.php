<?PHP
include "../core/CommentaireC.php";
$CommentaireC=new CommentaireC();
if (isset($_GET["Id"]))
{
$CommentaireC->SupprimerCommentaire($_GET["Id"]);
$test=2;
echo ("<script language='javascript'>window.location.href='AfficherArticle.php?notification=$test'</script>");
}else{
	echo "fail";
}

?>

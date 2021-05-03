<?PHP
include "../core/ArticleC.php";
$ArticleC=new ArticleC();
if (isset($_GET["Id"]))
{
$ArticleC->SupprimerArticle($_GET["Id"]);
	$test=2;
echo ("<script language='javascript'>window.location.href='AfficherArticle.php?notification=$test'</script>");
	$test=5;
echo ("<script language='javascript'>window.location.href='AfficherArticle.php?notification=$test'</script>");
}else{
	echo "fail";
}

?>

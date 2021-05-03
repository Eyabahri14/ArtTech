<?PHP
include "../core/CategorieC.php";
$CategorieC=new CategorieC();
$nb_produit=$CategorieC->CompterProduit($_GET["Nom"]);
foreach ($nb_produit as $row) {
                $nb_produit=$row['count(*)'];
      }
if (isset($_GET["Id"]))
{
	if($nb_produit == 0){
$CategorieC->SupprimerCategorie($_GET["Id"]);
$test=2;
echo ("<script language='javascript'>window.location.href='AfficherCategorie.php?notification=$test'</script>");
	}else if($nb_produit > 0){
	$test=5;
	echo ("<script language='javascript'>window.location.href='AfficherCategorie.php?notification=$test'</script>");
	
	}
}else{
	echo "fail";
}

?>

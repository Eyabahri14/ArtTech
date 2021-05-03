 <?php
session_start();
include_once "../core/AdminC.php";
include_once "../entities/Admin.php";
  if (isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Adresse']) and isset($_POST['MDPV'])){
    $target_file="";
    $id_ini=$_SESSION['UID'];
    $target_file=$_SESSION['UPIC'];
    $Admin1 = new Admin($id_ini,$_POST['Nom'],$_POST['Prenom'],$_POST['Adresse'],$_POST['MDPV'],$target_file);
    $admin1c=new AdminC();
    $admin1c->ModifierAdmin($Admin1,$id_ini);
    $test=3;
    echo ("<script language='javascript'>window.location.href='Acceuil.php?notification=$test'</script>");
  }else{
    echo "fail";
  }
  ?>   
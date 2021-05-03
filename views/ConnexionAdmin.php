<?php
session_start(); 
include_once "../core/AdminC.php";
include_once "../entities/Admin.php";
if(isset($_POST['Adresse']) and isset($_POST['MDP']))
{  
   $adresse=$_POST['Adresse'];
   $Pass=$_POST['MDP'];
   //$PassCrypte=password_hash($Pass, PASSWORD_DEFAULT);
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sefrim";

    $conn=mysqli_connect($servername, $username,$password,$dbname);

   $sql="SELECT * FROM `admin` WHERE `MDP`='$Pass' AND `Adresse`='$adresse' LIMIT 1";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)==1){
    $liste=$conn->query($sql);
    foreach ($liste as $row) {
            $id=$row['Id'];
            $nom=$row['Nom'];
            $prenom=$row['Prenom'];
            $adresse=$row['Adresse'];
            $mdp=$row['MDP'];
            $image=$row['Image'];
            $_SESSION['UID']=$id;
            $_SESSION['UNAME']=$nom;
            $_SESSION['ULNAME']=$prenom;
            $_SESSION['UPIC']=$image;
            $_SESSION['UEMAIL']=$adresse;
            $_SESSION['UPSSWD']=$mdp;


        }

    echo ("<script language='javascript'>window.location.href='Acceuil.php'</script>");
  }else{
    $test=4;
    echo ("<script language='javascript'>window.location.href='LoginAdmin.php?notification=$test'</script>");
  } 
}
?>
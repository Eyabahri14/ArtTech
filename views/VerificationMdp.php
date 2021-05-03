<?php
session_start(); 
include_once "../core/AdminC.php";
include_once "../entities/Admin.php";
if(isset($_POST['Pin']))
{  
  
   $Pass=$_POST['Pin'];
  // echo $Pass;
   //$PassCrypte=password_hash($Pass, PASSWORD_DEFAULT);
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sefrim";

    $conn=mysqli_connect($servername, $username,$password,$dbname);

   $sql="SELECT * FROM `admin` WHERE `MDP`='$Pass' LIMIT 1";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)==1){
    $liste=$conn->query($sql);
   echo ("<script language='javascript'>window.location.href='ParametreProfilAdmin.php'</script>");
  }else{
    $test=4;
    echo ("<script language='javascript'>window.location.href='Acceuil.php?notification=$test'</script>");
  } 
}
?>
<?php
include "../core/ProduitC.php";
include "../entities/Produit.php";

if(isset($_POST['Nom']) and isset($_POST['Type']) and isset($_POST['Prix']) and isset($_POST['Quantite']) and isset($_POST['Description']))
{  

  
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["Image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["upload"])) {
    $check = getimagesize($_FILES["Image"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
    if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
    if ($_FILES["Image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["Image"]["name"]). " has been uploaded.";
    } else {
     //   echo "Sorry, there was an error uploading your file.";
    }
}
    $Id="";
    $Produit1C = new ProduitC();
    $Produit1 = new Produit($Id,$_POST['Nom'],$_POST['Type'],$_POST['Prix'],$_POST['Quantite'],$_POST['Description'],$target_file);
    $nom=$_POST['Nom'];
    $type=$_POST['Type'];
    $prix=$_POST['Prix'];
    $Quantite=$_POST['Quantite'];
    $Produit1C->AjouterProduit($Produit1);
    echo ("<script language='javascript'>window.location.href='mailing.php?nom=$nom&type=$type&prix=$prix&quantite=$Quantite&image=$target_file'</script>");
    
}
else
{
    $test=2;
    //echo ("<script language='javascript'>window.location.href='AfficherProduit.php?notification=$test'</script>");

}
?>
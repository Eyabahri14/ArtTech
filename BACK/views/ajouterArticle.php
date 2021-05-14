<?php
include "../core/ArticleC.php";
include "../entities/Article.php";

if(isset($_POST['Titre']) and isset($_POST['Description']))
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
    $Date_a= Date('Y-m-d H:i:s');
    $Article1C = new ArticleC();
    $Article1 = new Article($Id,$_POST['Titre'],$Date_a,$_POST['Description'],$target_file);
    $Article1C->AjouterArticle($Article1);
    echo ("<script language='javascript'>window.location.href='AfficherArticle.php'</script>");
    
}
else
{
    $test=2;
    //echo ("<script language='javascript'>window.location.href='AfficherArticle.php?notification=$test'</script>");

}
?>
<?php
include_once "../core/AdminC.php";
include_once "../entities/Admin.php";

if(isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Adresse']) and isset($_POST['MDP']) and isset($_POST['MDPV']))
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
    $adresse=$_POST['Adresse'];
    $Pass=$_POST['MDP'];
    //$PassCrypte=password_hash($Pass, PASSWORD_DEFAULT);
    $Admin1C = new AdminC();
    $listeAdresse=$Admin1C->RecupererAdresse();
    $i=2;
    foreach($listeAdresse as $row){
        $adressebase=$row['Adresse'];
        if($adresse==$adressebase){
            $i=1;
            break;
        }else{
            $i=2;
        }
    }
    if($i==2){
        if($_POST['MDP']==$_POST['MDPV']){
            $Admin1 = new Admin($Id,$_POST['Nom'],$_POST['Prenom'],$_POST['Adresse'],$Pass,$target_file);
            $Admin1C->AjouterAdmin($Admin1);
            $test=1;
            echo ("<script language='javascript'>window.location.href='LoginAdmin.php?notification=$test'</script>");
    }else{
             $test=2;
             echo ("<script language='javascript'>window.location.href='LoginAdmin.php?notification=$test'</script>");

}
    }else{
        $test=3;
        echo ("<script language='javascript'>window.location.href='LoginAdmin.php?notification=$test'</script>");
    }

}
?>
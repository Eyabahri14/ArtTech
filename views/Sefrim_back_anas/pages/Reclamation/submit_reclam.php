<?php

$link = mysqli_connect("localhost", "root", "", "sefrim");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$message= mysqli_real_escape_string($link, $_REQUEST['message']);
$userID = mysqli_real_escape_string($link, $_REQUEST['UserId']);

$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO reclam (uid, dat, message) VALUES ('$userID', '$date', '$message')";
if(mysqli_query($link, $sql)){
    header('Location: AfficherReclamation.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sefrim");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$comments= mysqli_real_escape_string($link, $_REQUEST['comments']);
$reclamID = mysqli_real_escape_string($link, $_REQUEST['reclamId']);


// Attempt insert query execution
$date = date('Y-m-d H:i:s');//date()->format('Y-m-d H:i:s');

$sql = "UPDATE `reclam` SET `message` = '$comments' WHERE `reclam`.`reclamid` = '$reclamID'";
if(mysqli_query($link, $sql)){
    header('Location: AfficherReclamation.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

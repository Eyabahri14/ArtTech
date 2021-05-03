<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sefrim");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$IdNotif= mysqli_real_escape_string($link, $_REQUEST['IdNotif']);

$sql = "DELETE FROM `notif` WHERE `notif`.`notifid` = '$IdNotif'";
if(mysqli_query($link, $sql)){
    header('Location: AfficherNotification.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);






  ?>

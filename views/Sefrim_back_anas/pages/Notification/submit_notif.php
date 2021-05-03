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
$SenderID = mysqli_real_escape_string($link, $_REQUEST['SenderId']);
$ReceiverID = mysqli_real_escape_string($link, $_REQUEST['ReceiverId']);


// Attempt insert query execution
$date = date('Y-m-d H:i:s');//date()->format('Y-m-d H:i:s');

$sql = "INSERT INTO notif (senderid, receiverid, dat, message) VALUES ('$SenderID', '$ReceiverID', '$date', '$comments')";
if(mysqli_query($link, $sql)){
    header('Location: AfficherNotification.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

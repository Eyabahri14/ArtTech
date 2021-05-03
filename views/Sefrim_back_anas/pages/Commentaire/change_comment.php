<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "web","3308");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$comments= mysqli_real_escape_string($link, $_REQUEST['comments']);
$commentID = mysqli_real_escape_string($link, $_REQUEST['commentId']);


// Attempt insert query execution
$date = date('Y-m-d H:i:s');//date()->format('Y-m-d H:i:s');
 
$sql = "UPDATE `cmnt` SET `message` = '$comments' WHERE `cmnt`.`cid` = '$commentID'";
if(mysqli_query($link, $sql)){
    header('Location: AfficherCommentaire.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

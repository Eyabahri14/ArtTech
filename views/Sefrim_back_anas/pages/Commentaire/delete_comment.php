<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "web","3308");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$commentsID= mysqli_real_escape_string($link, $_REQUEST['CommentaireId']);

$sql = "DELETE FROM `cmnt` WHERE `cmnt`.`cid` = '$commentsID'";
if(mysqli_query($link, $sql)){
    header('Location: AfficherCommentaire.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);






  ?>
<?php 


$dsn ='mysql:host=localhost;dbname=eya_bahri';
$user = 'root';
$pass = '';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
    $con = new PDO($dsn , $user, $pass, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'you are connected welcome to database ya ghali';

}
catch (PDOException $e){
    echo 'failed to connect ' . $e->getMessage();
}

?>
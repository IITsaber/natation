<?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "centre_formation";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  header("Location:../errors/dberror.php");
  die();
} 


?>
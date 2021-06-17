<?php
// server information 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "restaurant system";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

//failsafe if the connection fails
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
   
?>
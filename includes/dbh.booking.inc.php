<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "contact_system";

$connBooking = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$connBooking){
    die("Connection failed: ". mysqli_connect_error());
}
   
?>
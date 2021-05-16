<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "contact_system";

$connContact = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$connContact){
    die("Connection failed: ". mysqli_connect_error());
}
   
?>
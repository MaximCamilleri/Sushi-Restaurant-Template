<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "contact_system";

$connEvents = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$connEvents){
    die("Connection failed: ". mysqli_connect_error());
}
   
?>
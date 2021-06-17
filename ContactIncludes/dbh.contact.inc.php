<?php
//conecting to the contact_system database
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "contact_system";

//creating the connection
$connContact = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

//checking if the database connection was successful
if(!$connContact){
    die("Connection failed: ". mysqli_connect_error());
}
   
?>
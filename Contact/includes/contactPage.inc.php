<?php

if(isset($_POST["submitContact"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $details = $_POST["details"];

    require_once "dbh.contact.inc.php";
    require_once "contactFunctions.inc.php";

    
    if(emptyInputContact($name, $email, $details) !== false){
        header("location: ../ContactPage/contact.php?error=emptyinput");
        exit();
    }

    createContact($connContact, $name, $email, $details);

}
else{
    header("location: ../ContactPage/contact.php?fail=yes");
    exit();
}

$sql = "INSERT INTO contact (senderName, senderEmail, details) VALUES ($name, $email, $details);";
mysqli_query($connContact, $sql);

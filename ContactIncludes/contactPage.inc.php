<?php

if(isset($_POST["submitContact"])){
    //get the data trough post
    $name = $_POST["name"];
    $email = $_POST["email"];
    $details = $_POST["details"];

    require_once "dbh.contact.inc.php";
    require_once "contactFunctions.inc.php";

    
    if(emptyInputContact($name, $email, $details) !== false){
        header("location: ../ContactPage/contact.php?error=emptyinput");
        exit();
    }

    //check that the data can be sent with no problems
    createContact($connContact, $name, $email, $details);

}
else{
    header("location: ../ContactPage/contact.php?fail=yes");
    exit();
}

//send the data to the server 
$sql = "INSERT INTO contact (senderName, senderEmail, details) VALUES ($name, $email, $details);";
mysqli_query($connContact, $sql);

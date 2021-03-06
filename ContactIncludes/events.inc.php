<?php

if(isset($_POST["submit"])){
    //get data
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $time = $_POST["time"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $details = $_POST["details"];

    require_once "dbh.contact.inc.php";
    require_once "contactFunctions.inc.php";

    
    //a few checks for empty inputs and invalid emails
    if(emptyInputEvents($email, $tel, $time, $name, $surname, $details) !== false){
        header("location: ../Events/events.php?error=emptyinput");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../Events/events.php?error=invalidemail");
        exit();
    }

    createBooking($connContact, $email, $tel, $time, $name, $surname, $details);

}
else{
    header("location: ../Events/events.php");
    exit();
}

//send the data to the server
$sql = "INSERT INTO events (name, surname, email, phone, eventType, details) VALUES ($name, $surname, $email, $phone, $eventType, $details);";
mysqli_query($connContact, $sql);

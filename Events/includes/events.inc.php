<?php

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $time = $_POST["time"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $details = $_POST["details"];

    require_once "dbh.events.inc.php";
    require_once "eventFunctions.inc.php";

    
    if(emptyInputEvents($email, $tel, $time, $name, $surname, $details) !== false){
        header("location: ../events.php?error=emptyinput");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../events.php?error=invalidemail");
        exit();
    }

    createBooking($connEvents, $email, $tel, $time, $name, $surname, $details);

}
else{
    header("location: ../events.php");
    exit();
}

$sql = "INSERT INTO events (name, surname, email, phone, eventType, details) VALUES ($name, $surname, $email, $phone, $eventType, $details);";
mysqli_query($connEvents, $sql);

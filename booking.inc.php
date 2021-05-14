<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $tel = $_POST["tel"];
        $numGuests = $_POST["guest"];
        $date = $_POST["date"];
        $time = $_POST["time"];

        require_once "dbh.booking.inc.php";
        require_once "functions.booking.inc.php";

        if(emptyInputBooking($conn, $name, $tel, $date, $numGuests, $time) !== false){
            header("location: ../signup.php?error=emptyinput");
            exit();
        }

        if(emailExists($email, $conn) !== false){
            header("location: ../signup.php?error=emailexists");
            exit();
        }

        createBooking($conn, $name, $lastname, $email, $password);


    }else{
        header("location: ../signup.php");
    }

    

    $sql = "INSERT INTO users (user_firstname, user_lastname, user_email, user_telNumber, user_password) VALUES ($firstname, $lastname, $email, $telNumber, $password);";
    mysqli_query($conn, $sql);
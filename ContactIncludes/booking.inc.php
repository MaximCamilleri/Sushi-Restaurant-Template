<?php
    if(isset($_POST["subBooking"])){
        $name = $_POST["name"];
        $tel = $_POST["tel"];
        $numGuests = $_POST["guests"];;
        $date = $_POST["date"];
        $time = $_POST["time"];

        require_once "dbh.contact.inc.php";
        require_once "contactFunctions.inc.php";

        if(emptyInputBooking($connContact, $name, $tel, $date, $numGuests, $time) !== false){
            header("location: ../booking.php?error=emptyinput");
            exit();
        }

        createBooking($connContact, $name, $tel, $date, $numGuests, $time);


    }else{
        header("location: ../booking.php");
    }

    
    //insert function
    $sql = "INSERT INTO bookings (name, contactNumber, bookingDate, numGuests, time) VALUES ($name, $tel, $date, $numGuests, $time);";
    mysqli_query($connContact, $sql);

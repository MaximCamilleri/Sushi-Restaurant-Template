<?php
    if(isset($_POST["subBooking"])){
        $name = $_POST["name"];
        $tel = $_POST["tel"];
        $numGuests = $_POST["guests"];;
        $date = $_POST["date"];
        $time = $_POST["time"];

        require_once "dbh.booking.inc.php";
        require_once "functions.booking.inc.php";

        if(emptyInputBooking($connBooking, $name, $tel, $date, $numGuests, $time) !== false){
            header("location: ../booking.php?error=emptyinput");
            exit();
        }

        createBooking($connBooking, $name, $tel, $date, $numGuests, $time);


    }else{
        header("location: ../booking.php");
    }

    

    $sql = "INSERT INTO bookings (name, contactNumber, bookingDate, numGuests, time) VALUES ($name, $tel, $date, $numGuests, $time);";
    mysqli_query($connBooking, $sql);

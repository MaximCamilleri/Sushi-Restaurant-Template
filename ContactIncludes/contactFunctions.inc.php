<?php
//
function emptyInputEvents($email, $tel, $time, $name, $surname, $details){
    $result = false;
    if(empty($email) || empty($tel) || empty($time) || empty($name) || empty($surname) || empty($details)){
        $result = true;
    }
    return $result;
}


function emptyInputContact($name, $email, $details){
    $result = false;
    if(empty($email) || empty($name) || empty($details)){
        $result = true;
    }
    return $result;
}

function emptyInputBooking($name, $tel, $numGuests, $date, $time){
    $result = false;
    if(empty($name) || empty($tel) || empty($numGuests) || empty($date) || empty($time)){ //empty input checks
        $result = true;
    }
    return $result; //returns true if any input was empty
}

function invalidEmail($email){
    $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //built in function
        $result = true;
    }
    return $result;
}

function createBooking($conn, $name, $contactNumber, $bookingData, $numGuests, $time){
    $sql = "INSERT INTO bookings (name, contactNumber, bookingDate, numGuests, time) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../booking.php?error=stmtfailed2");
        exit();
    }

    //prepers the data for upload 
    mysqli_stmt_bind_param($stmt, "sssss", $name, $contactNumber, $bookingData, $numGuests, $time);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    header("location: ../Templates/booking.php?error=none");

}


function createContact($conn, $name, $email, $details){
    $sql = "INSERT INTO contact (senderName, senderEmail, details) VALUES (?, ?, ?);"; //prepere sql
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Templates/contact.php?error=stmtfailed2");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $details); //prepere the data for execution
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    header("location: ../Templates/contact.php?error=none");
}


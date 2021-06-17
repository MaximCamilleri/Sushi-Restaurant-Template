
<?php

function emptyInputBooking($name, $tel, $numGuests, $date, $time){
    $result = false;
    if(empty($name) || empty($tel) || empty($numGuests) || empty($date) || empty($time)){
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

    mysqli_stmt_bind_param($stmt, "sssss", $name, $contactNumber, $bookingData, $numGuests, $time);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    header("location: ../booking.php?error=none");

}
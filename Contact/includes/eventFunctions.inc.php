<?php

function emptyInputEvents($email, $tel, $time, $name, $surname, $details){
    $result = false;
    if(empty($email) || empty($tel) || empty($time) || empty($name) || empty($surname) || empty($details)){
        $result = true;
    }
    return $result;
}

function invalidEmail($email){
    $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    return $result;
}

function createBooking($conn, $email, $tel, $time, $name, $surname, $details){
    $sql = "INSERT INTO events (name, surname, email, phone, eventType, details) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../events.php?error=stmtfailed2");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $name, $surname, $email, $tel, $time, $details);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    header("location: ../events.php?error=none");

}


<?php

    require_once '../bootstrap.php';
    session_start();

    $loggedIn = FALSE;
    if(isset($_SESSION['userId'])){
        $loggedIn = True;
    }

    echo $twig->render("Bookings/booking.html", ["loggedIn" =>$loggedIn]);

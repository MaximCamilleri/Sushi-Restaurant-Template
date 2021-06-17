<?php

    require_once '../bootstrap.php';
    include_once "../GeneralIncludes/dbh.inc.php";
    session_start();

    $loggedIn = FALSE;
    if(isset($_SESSION['userId'])){
        $loggedIn = True;
    }

    $item = $_GET['item'];


    $sql = "SELECT * FROM food_menu as f WHERE f.itemId = '$item'";
    $result = mysqli_query($conn, $sql);


    echo $twig->render("Details/detailsFood.html", ["loggedIn" => $loggedIn, 'food' => $result]);

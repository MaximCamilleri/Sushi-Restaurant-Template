<?php

    require_once '../bootstrap.php';
    include_once "../GeneralIncludes/dbh.inc.php";
    session_start();

    $loggedIn = FALSE;
    if(isset($_SESSION['userId'])){
        $loggedIn = True;
    }

    $item = $_GET['item'];


    $sql = "SELECT * FROM food_menu WHERE itemId = 3";;

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: favourites.php?error=stmt2");
    }else{
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }

    echo $twig->render("Details/details.html", ["loggedIn" => $loggedIn, 'food' => $result]);

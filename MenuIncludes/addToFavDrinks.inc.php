<?php
    session_start();
    if(isset($_SESSION["userId"])){
        $userId = $_SESSION["userId"];
    }else{
        header("location: ../Templates/login.php");
        exit();
    }
    $itemId = $_GET["itemId"];
    require_once "../GeneralIncludes/dbh.inc.php";
    require_once "menuFunctions.inc.php";

    createFavDrinks($conn, $userId, $itemId);



<?php
    session_start();
    if(isset($_SESSION["userId"])){
        $userId = $_SESSION["userId"];
    }else{
        header("location: ../SignUpAndLogin/login.php");
        exit();
    }
    $itemId = $_GET["itemId"];
    require_once "../GeneralIncludes/dbh.inc.php";
    require_once "menuFunctions.inc.php";

    createFav($conn, $userId, $itemId);



<?php

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    
    if(emptyInputLogin($email, $password) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

}
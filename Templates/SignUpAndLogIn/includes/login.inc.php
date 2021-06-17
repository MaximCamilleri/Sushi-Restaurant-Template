<?php

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once "../../../GeneralIncludes/dbh.inc.php";
    require_once "functions.inc.php";

    
    if(emptyInputLogin($email, $password) !== false){
        header("location: ../../login.html?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $password);

}
else{
    header("location: ../../login.html");
    exit();
}
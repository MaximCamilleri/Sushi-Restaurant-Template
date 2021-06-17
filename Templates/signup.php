<?php

    require_once '../bootstrap.php';
    $errorInput = FALSE;
    $errorEmail = FALSE;
    $errorExists = FALSE;
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            $errorInput = TRUE;
        }
        else if($_GET["error"] == "invalidemail"){
            $errorEmail = TRUE;
        }
        else if($_GET["error"] == "emailexists"){
            $errorExists = TRUE;
        }
    }
    error_reporting(0);
    echo $twig->render("SignUpAndLogIn/signup.html", ["errorInput" => $errorInput, "errorEmail" => $errorEmail, "errorExists" => $errorExists]);


    


    
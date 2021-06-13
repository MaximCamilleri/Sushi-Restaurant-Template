<?php

    require_once '../bootstrap.php';
    $errorInput = FALSE;
    $errorEmail = FALSE;
    $errorExists = FALSE;
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            $errorInput = TRUE;
        }
        if($_GET["error"] == "invalidemail"){
            $errorEmail = TRUE;
        }
        if($_GET["error"] == "emailexists"){
            $errorExists = TRUE;
        }
    }

    echo $twig->render("SignUpAndLogIn/signup.html"), ["errorInput" => $errorInput], ["errorEmail" => $errorEmail], ["errorExists" => $errorExists];


    


    
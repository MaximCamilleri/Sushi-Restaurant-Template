<?php

    require_once '../bootstrap.php';
    $errorValue = FALSE;
    $errorFields = FALSE;
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            $errorValue = TRUE;
        }else if($_GET["error"] == "invalidInput"){
            $errorFields = TRUE;
        }  
    }
    echo $twig->render("SignUpAndLogIn/login.html", ["errorValue" => $errorValue], ["errorFields" => $errorFields]);
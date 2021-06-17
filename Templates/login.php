<?php

    require_once '../bootstrap.php';
    $errorValue = FALSE;
    $errorFields = FALSE;
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            $errorFields = TRUE;
        }else if($_GET["error"] == "wronglogin"){
            $errorValue = TRUE;
        }  
    }
    echo $twig->render("SignUpAndLogIn/login.html", ["errorValue" => $errorValue, "errorFields" => $errorFields]);
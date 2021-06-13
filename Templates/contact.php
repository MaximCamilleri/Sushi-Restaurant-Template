<?php

    require_once '../bootstrap.php';
    session_start();

    $loggedIn = FALSE;
    if(isset($_SESSION['userId'])){
        $loggedIn = True;
    }
    $complaints = FALSE;
    if(isset($_GET['type'])){
        if($_GET['type'] === "complaints"){
            $complaints = TRUE;
        }
    }

    echo $twig->render("Contact/contact.html", ["loggedIn" =>$loggedIn, "type" => $complaints]);

<?php
    session_start();
    require_once __DIR__.'\bootstrap.php';

    if($_SESSION['userId']){
        $loggedIn = True;
    }
    echo $twig->render('layout.html', ["loggedIn" =>$loggedIn]);


    
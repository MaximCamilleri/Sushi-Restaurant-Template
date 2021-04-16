<?php

    session_start();
    $_SESSION['username'];

    if(isset($_SESSION['username'])){
        echo "you are loged in";
    }
    else{
        echo "you are not loged in";
    }


?>
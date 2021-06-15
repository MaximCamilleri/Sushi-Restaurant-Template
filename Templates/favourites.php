<?php

    require_once '../bootstrap.php';
    include_once "../GeneralIncludes/dbh.inc.php";

    session_start();
    $loggedIn = FALSE;
    if(isset($_SESSION['userId'])){
        $loggedIn = True;
        $userId = $_SESSION['userId'];
    }

    $sql = "SELECT * 
    FROM users as u inner join favourites as fav
    on fav.userId = '$userId' inner join food_menu as m 
    on m.itemId = fav.itemIdFood ;";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: favourites.php?error=stmt2");
    }else{
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }
    

    echo $twig->render("Favourites/favourites.html", ["loggedIn" => $loggedIn, 'food' => $result]);



    


    
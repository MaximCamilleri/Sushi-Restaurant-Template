<?php

    require_once '../bootstrap.php';
    include_once "../GeneralIncludes/dbh.inc.php";

    session_start();
    $loggedIn = FALSE;
    if(isset($_SESSION['userId'])){
        $loggedIn = True;
        $userId = $_SESSION['userId'];
    }

    $sql = "SELECT * FROM users as u inner join favourites as fav 
    on fav.userId = u.userId inner join food_menu as m 
    on m.itemId = fav.itemIdFood 
    WHERE fav.userId = '$userId'";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: favourites.php?error=stmt2");
    }else{
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }

    $sql2 = "SELECT * FROM users as u inner join favourites_drinks as fav 
    on fav.userId = u.userId inner join drinks_menu as m 
    on m.itemId = fav.itemId 
    WHERE fav.userId = '$userId'";

    $stmt2 = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt2, $sql2)){
        header("Location: favourites.php?error=stmt3");
    }else{
        mysqli_stmt_execute($stmt2);
        $result2 = mysqli_stmt_get_result($stmt2);
    }
    

    echo $twig->render("Favourites/favourites.html", ["loggedIn" => $loggedIn, 'food' => $result, 'drinks' => $result2]);



    


    
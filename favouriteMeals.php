<?php

    include_once "GeneralIncludes/dbh.inc.php";
    $body = "";
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
        header("Location: templates/favourites.php?error=stmt2");
    }else{
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }
    
    while($row=mysqli_fetch_assoc($result)){
        $body.= "Name:".$row['itemName']."(".$row['itemType'].")"."\nPrice:".$row['itemPrice']."\nSpice Level: ".$row['itemSpiceLevel'];
    }

    $to_email = $_POST['email'];
    $subject = "Facourites List - PogFish Asian";

    $headers = "";

    mail($to_email, $subject, $body, $headers);
    header("Location: templates/home.php");

?>
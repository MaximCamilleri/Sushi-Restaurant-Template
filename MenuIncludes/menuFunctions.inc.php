<?php

function createFav($conn, $userId, $itemId){
    $sql = "INSERT INTO favourites (userId, itemIdFood) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../FoodMenu/menu.php?error=stmtfailed2");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $userId, $itemId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    header("location: ../FoodMenu/menu.php?error=none");

}
<?php

function createFav($conn, $userId, $itemId){
    $sqlCheck = "SELECT * FROM favourites as f WHERE f.userId = '$userId' and f.itemIdFood = '$itemId';";
    
    
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sqlCheck)){
        header("Location: ../Favourites/favourites.php?error=stmt2");
        exit();
    }else{
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        if($row === NULL){
            mysqli_stmt_close($stmt);
            $sql = "INSERT INTO favourites (userId, itemIdFood) VALUES (?, ?);";
            $stmt2 = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt2, $sql)){
                header("location: ../FoodMenu/menu.php?error=stmtfailed");
                exit();
            }
        
            mysqli_stmt_bind_param($stmt2, "ss", $userId, $itemId);
            mysqli_stmt_execute($stmt2);
            mysqli_stmt_close($stmt2);
        
        
            header("location: ../FoodMenu/menu.php?error=none");
        }else{
            mysqli_stmt_close($stmt);
            $sql = "DELETE FROM favourites WHERE userId = '$userId' and itemIdFood = '$itemId';";
            $stmt3 = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt3, $sql)){
                header("location: ../FoodMenu/menu.php?error=stmtfailed2");
                exit();
            }

            mysqli_stmt_execute($stmt3);
            header("location: ../FoodMenu/menu.php?error=none");
        }
    }
}
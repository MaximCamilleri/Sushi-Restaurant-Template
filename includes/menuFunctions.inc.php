<?php

function emptyInput($title, $ingredients, $price, $file){
    $result = false;
    if(empty($title) || empty($ingredients) || empty($price) || empty($file)){
        $result = true;
    }
    return $result;
}


function addMenuItem($itemType, $connMenu){
    $sql = "SELECT * FROM menu WHERE itemType = '$itemType' ORDER BY itemOrder ASC;";
    $stmt = mysqli_stmt_init($connMenu);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../menu.php?error=stmt2");
    }else{
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="container column">
                    <img src="images/gallery/'.$row["itemImg"].'" alt="Spring Rolls" class="image">
                    <div class="overlay">
                        <h2>'.$row['itemName'].'</h2>
                        <div class="desc">'.$row["itemIngredients"].'</div>
                    </div>
                </div> ';
        }
    }   
}


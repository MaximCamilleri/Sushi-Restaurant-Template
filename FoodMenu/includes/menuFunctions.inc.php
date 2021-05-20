<?php

function emptyInput($title, $ingredients, $price, $file){
    $result = false;
    if(empty($title) || empty($ingredients) || empty($price) || empty($file)){
        $result = true;
    }
    return $result;
}


function addMenuItem($itemType, $connMenu){
    $sql = "SELECT * FROM food_menu WHERE itemType = '$itemType' ORDER BY itemOrder ASC;";
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
                        <h2 class="titleMenu">'.$row['itemName'].'</h2>
                        <p class="desc">'.$row["itemIngredients"].'</p>
                        <p class="price">€'.$row['itemPrice'].'</p>';

            if($row['itemSpiceLevel'] == "none"){
                echo '<img src="images/spiceLevels/green.png" class="spice">';
            }else if($row['itemSpiceLevel'] == "mild"){
                echo '<img src="images/spiceLevels/orange.png" class="spice">';
            }else if($row['itemSpiceLevel'] == "hot"){
                echo '<img src="images/spiceLevels/red.png" class="spice">';
            }else if($row['itemSpiceLevel'] == "hell"){
                echo '<img src="images/spiceLevels/hotred.png" class="spice">';
            }
            echo ' </div>
                </div>';
        }
    }   
}


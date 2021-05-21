<?php

function addFavItem($connMenu, $userId){
    $sql = "SELECT * 
    FROM users as u inner join favourites as fav
    on '$userId' = fav.userId inner join food_menu as m 
    on m.itemId = fav.itemIdFood ;";
    $stmt = mysqli_stmt_init($connMenu);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../favourites.php?error=stmt2");
    }else{
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="container column">
                    <img src="../FoodMenu/images/gallery/'.$row["itemImg"].'" alt="Spring Rolls" class="image">
                    <div class="overlay">
                        <h2 class="titleMenu">'.$row['itemName'].'</h2>
                        <a href="../MenuIncludes/addToFav.inc.php?itemId='.$row["itemId"].'">FAV</a>
                        <p class="desc">'.$row["itemIngredients"].'</p>
                        <p class="price">€'.$row['itemPrice'].'</p>';

            if($row['itemSpiceLevel'] == "none"){
                echo '<img src="../FoodMenu/images/spiceLevels/green.png" class="spice">';
            }else if($row['itemSpiceLevel'] == "mild"){
                echo '<img src="../FoodMenu/images/spiceLevels/orange.png" class="spice">';
            }else if($row['itemSpiceLevel'] == "hot"){
                echo '<img src="../FoodMenu/images/spiceLevels/red.png" class="spice">';
            }else if($row['itemSpiceLevel'] == "hell"){
                echo '<img src="../FoodMenu/images/spiceLevels/hotred.png" class="spice">';
            }
            echo ' </div>
                </div>';
        }
    }   
}
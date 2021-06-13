<?php
    include_once "../GeneralIncludes/dbh.inc.php";
    include_once "includes/favouritesFunctions.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PogFish Sushi</title>
        
        <link rel="stylesheet" href="../MenuIncludes/menuStyles.css">
        <script src="../MenuIncludes/menuJS.js"></script>
        
        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Raleway:wght@300&family=Ubuntu&display=swap" rel="stylesheet">

    </head>
    <body>
        <?php
            include "../Templates/navbar.php";
        ?>
        
        <div class = "sidenav">
            <a class = "active option" onClick = "menu(0)" href = "#food">Food</a></li>
            <a class = "option" onClick = "menu(1)" href = "#drinks">Drinks</a></li>


        </div>
    
             <!-- extra idea for pics:
                 <figure>
                    <img src = 'nigiriSashimi.jpg' alt = 'Sushi Nigiri'>
                    <figcaption>Price goes here</figcaption>
                </figure> -->
                 
        <div class = "food">
            <div id = "food" class = "area">
                <h2>Food</h2> 
              
                <div class = "row">
                    <?php
                        if(isset($_SESSION["userId"])){
                            $userId = $_SESSION["userId"];
                        }else{
                            header("location: ../SignUpAndLogin/login.php");
                            exit();
                        }
                        addFavItem($conn, $userId)
                    ?>
                </div>  
            </div>
        

            <div id = "drinks" class = "area">
                <h2>Drinks</h2> 
                <div class = "row">
                    <?php
                        $itemType = "sushi";
                        addMenuItem($itemType, $connMenu); 
                    ?>
                </div> 
            </div>
            
    </div>

    <?php
        if(isset($_SESSION['userId']) && $_SESSION['userId'] === 4){
            echo '<div>
                <form id = "inputForm" action="includes/menu-upload.inc.php" method="POST" enctype="multipart/form-data">
                    <h1>Input</h1>
                    <label for=""></label>
                    <input id="fileName" type="text" name="filename" placeholder="File name...">
                    <br>
                    <input id="dishName" type="text" name="title" placeholder="Dish Title...">
                    <br>
                    <input id="ingredients" type="text" name="ingredients" placeholder="list of ingredients...">
                    <br>
                    <input id="price" type="text" name="price" placeholder="Price">
                    <br>
                    <input id="spice" type="text" name="spice" placeholder="Spice Level">
                    <br>
                    <input id="section" type="text" name="section" placeholder="Starter/Sushi/Accompaniments/Soup/Curry/Dessert">
                    <br>
                    <input id="fileName" type="file" name="file">
                    <br>
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>';
        }
        
    ?>


       
</body>
</html> 
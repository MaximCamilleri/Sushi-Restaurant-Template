<?php
    include_once "includes/menuFunctions.inc.php";
    include_once "../GeneralIncludes/dbh.inc.php";
    include_once "../MenuIncludes/menuFunctions.inc.php"
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
            <a class = "active option" onClick = "menu(0)" href = "#starters">Starters</a></li>
            <a class = "option" onClick = "menu(1)" href = "#sushi">Sushi</a></li>
            <a class = "option" onClick = "menu(2)" href = "#soup">Soup</a></li>
            <a class = "option" onClick = "menu(3)" href = "#curry">Curry</a></li>
            <a class = "option" onClick = "menu(4)" href = "#accompaniments">Accompaniments</a></li>
            <a class = "option" onClick = "menu(5)" href = "#Dessert">Dessert</a></li>


        </div>
                 
        <div class = "food">
            <div id = "starters" class = "area">
                <h2>Starters</h2> 
              
                <div class = "row">
                    <?php
                        $itemType = "starter";
                        addMenuItem($itemType, $conn); 
                    ?>
                </div>  
            </div>
        

            <div id = "sushi" class = "area">
                <h2>Sushi</h2> 
                <div class = "row">
                    <?php
                        $itemType = "sushi";
                        addMenuItem($itemType, $conn); 
                    ?>
                </div> 
            </div>

            <div id = "soup" class = "area">
                <h2>Soup</h2> 
                <div class = "row">
                    <?php
                        $itemType = "soup";
                        addMenuItem($itemType, $conn); 
                    ?>
                </div> 
            </div>

            <div id = "curry" class = "area">
                <h2>Curry</h2> 
                <div class = "row">
                    <?php
                        $itemType = "curry";
                        addMenuItem($itemType, $conn); 
                    ?>
                </div> 
            </div>

            <div id = "accompaniments" class = "area">
                <h2>Accompaniments</h2> 
                <div class = "row">
                    <?php
                        $itemType = "accompaniments";
                        addMenuItem($itemType, $conn); 
                    ?>
                </div> 
            </div>

            <div id = "Dessert" class = "area">
                <h2>Dessert</h2>
                <div class = "row">
                    <?php
                        $itemType = "dessert";
                        addMenuItem($itemType, $conn); 
                    ?>
                </div>  
            </div>
  
            
    </div>

    <?php
        if(isset($_SESSION['userId']) && $_SESSION['userId'] === 3){
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
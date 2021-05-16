<!doctype html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>PogFish Sushi</title>
        
        <link rel="stylesheet" href="menuStyles.css">
        <script src="menuJS.js"></script>
        
        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Raleway:wght@300&family=Ubuntu&display=swap" rel="stylesheet">

    </head>
    <body>
        
        <div class = "sidenav">
            <a class = "active option" onClick = "menu(0)" href = "#starters">Starters</a></li>
            <a class = "option" onClick = "menu(1)" href = "#sushi">Sushi</a></li>
            <a class = "option" onClick = "menu(2)" href = "#ramen">Ramen</a></li>
            <a class = "option" onClick = "menu(3)" href = "#Dessert">Dessert</a></li>

        </div>
    
             <!-- extra idea for pics:
                 <figure>
                    <img src = 'nigiriSashimi.jpg' alt = 'Sushi Nigiri'>
                    <figcaption>Price goes here</figcaption>
                </figure> -->
                 
        <div class = "food">
            <div id = "starters" class = "area">
                <h2>Starters</h2> 
              
                <div class = "row">
                    <?php
                    include_once "includes/dbh.menu.inc.php";
                    $sql = "SELECT * FROM menu ORDER BY itemOrder ASC;";
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
                                        <h2>'.$row["itemName"].'</h2>
                                        <div class="desc">'.$row["itemIngredients"].'</div>
                                    </div>
                                </div> ';
                        }
                    }

                    
                        
                    ?>

                    
            </div>
        

            <div id = "sushi" class = "area">
                <h2>Sushi</h2> 
            </div>

            <div id = "ramen" class = "area">
                <h2>Ramen</h2> 
            </div>


            <div id = "Dessert" class = "area">
                <h2>Dessert</h2> 
            </div>
  
            
    </div>
    <?php
        if(isset($_SESSION['userId'])){

        }
        echo '<div>
                <form action="includes/menu-upload.inc.php" method="POST" enctype="multipart/form-data">
                    <label for=""></label>
                    <input type="text" name="filename" placeholder="File name...">
                    <input type="text" name="title" placeholder="Dish Title...">
                    <input type="text" name="ingredients" placeholder="list of ingredients...">
                    <input type="text" name="price" placeholder="Price">
                    <input type="text" name="spice" placeholder="Spice Level">
                    <input type="text" name="section" placeholder="Starter/Sushi/Accompaniments/Soup/Curry/Dessert">
                    <input type="file" name="file">
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>';
    ?>


       
</body>
</html> 
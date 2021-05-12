<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PogFish Sushi</title>
        <!-- <link rel="stylesheet" href="contactStyles.css"> -->
        <link rel="stylesheet" href="loginCSS.css">
        <script src="loginJS.js"></script>
        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Raleway:wght@300&family=Ubuntu&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class = "split">
            <div class = "left">
                <section class = "copy">
                    <h1 class = "title">PogFish Sushi</h1>
                    <p class = "text">The best sushi restaurant on the UOM Campus</p>
                </section>
            </div>
            
            
            <div class = "right">
                <form method="POST", action="includes/login.inc.php">
                    <section class = "copy">
                        <h2 class = "title"> Log In</h2>
                        <div class = "login">
                            <p class = "text">Don't have an account?<a href = "signup.php"><strong>Sign Up</strong></a></p>
                        </div>
                    </section>

                   
                    <label class = "title" for="email">Email</label>
                    <input class = "title" id = "email" type="email" name="email">
                    <br>
                   
                    <div class = "password-container">
                        <label for="password">Password</label>
                        <input id = "password" type="password" name="password">
                        <input class = "password-checkbox" type="checkbox" onclick="myFunction()"><i class = "text">See password</i> 
                    </div>
                    <br>

                   
                    
                    <button type="submit" name="submit" class = "login-button">Login</button>
                    
                </form>

                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo "<p>Fill in all the required fields<p>";
                        }
                        if($_GET["error"] == "wronglogin"){
                            echo "<p>The email of password was incorrect<p>";
                        }
                    }
                ?>
            </div>
           
        </div>
       
        
    </body>
</html>


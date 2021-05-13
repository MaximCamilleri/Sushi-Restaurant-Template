<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PogFish Sushi</title>
        <!-- <link rel="stylesheet" href="contactStyles.css"> -->
        <link rel="stylesheet" href="signUpCSS.css">
        <script src="loginJS.js"></script>
        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Raleway:wght@300&family=Ubuntu&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class = split>
            <div class = left>
                <section class = "copy">
                    <h1>PogFish Sushi</h1>
                    <p>The best sushi restaurant on the UOM Campus</p>
                </section>
            </div>
            
            <div class = right>
                <form method="POST", action="includes/signup.inc.php">
                    <section class = "copy">
                        <h2> Sign Up</h2>
                        <div class = "login">
                            <p>Already have an account? <a href = "login.php"><strong>Log In</strong></a></p>
                        </div>
                    </section>

                    <label for="firstname">First Name</label>
                    <input id = "firstname" type="text" name="firstname">
                    <br>
                    <label for="lastname">Last Name</label>
                    <input if = "lastname" type="text" name="lastname">
                    <br>
                    <label for="email">Email</label>
                    <input id = "email" type="email" name="email">
                    <br>
                    <div class = "password-container">
                        <label for="password">Password</label>
                        <input id = "password" type="password" name="password">
                        <input class = "password-checkbox" type="checkbox" onclick="myFunction()">
                    </div>
                    <br>

                    <div class = "cta"> 
                        <label class ="checkbox">
                            <input type= "checkbox">
                            Sign up for email updates
                        </label>
                    </div>
                    <br>
                    <button type="submit" name="submit" class = "signup-button">Sign up</button>
                    
                   
                    
                    <!-- <section class = "legal">
                        <p>By continuing, you will be agreeing to our Terms & Conditions</p>
                    </section> -->
                </form>
                                
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo "<p>Fill in all the required fields<p>";
                        }
                        if($_GET["error"] == "invalidemail"){
                            echo "<p>A valid email was not entered<p>";
                        }
                        if($_GET["error"] == "emailexists"){
                            echo "<p>Email is already in use<p>";
                        }
                        if($_GET["error"] == "none"){
                            echo "<p>Signup was succesful<p>";
                        }
                    }
                ?>
            </div>
           
        </div>
       
        
    </body>
</html>


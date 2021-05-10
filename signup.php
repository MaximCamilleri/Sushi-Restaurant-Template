<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PogFish Sushi</title>
        <link rel="stylesheet" href="contactStyles.css">
        <link rel="stylesheet" href="loginCSS.css">

        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Raleway:wght@300&family=Ubuntu&display=swap" rel="stylesheet">

    </head>
        
        <h1>Sign up page</h1>
        <form method="POST", action="includes/signup.inc.php">
                <label for="">First Name</label>
                <input type="text" name="firstname">
                <br>
                <label for="">Last Name</label>
                <input type="text" name="lastname">
                <br>
                <label for="">Email</label>
                <input type="text" name="email">
                <br>
                <label for="">Password</label>
                <input type="text" name="password">
                <br>
                <button type="submit" name="submit">Sign up</button>

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
    </body>
</html>


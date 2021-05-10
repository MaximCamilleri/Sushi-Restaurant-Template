<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PogFish Sushi</title>
        <!-- <link rel="stylesheet" href="contactStyles.css"> -->
        <link rel="stylesheet" href="loginCSS.css">

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
                <form method="POST", action="signup.inc.php">
                    <section class = "copy">
                        <h2> Sign Up</h2>
                        <div class = "login">
                            <p>Already have an account? <a href = "#"><strong>Log In</strong></a></p>
                        </div>
                    </section>

                   
                    <label for="email">Email</label>
                    <input id = "email" type="email" name="email">
                    <br>
                   
                    <div class = "password-container">
                        <label for="password">Password</label>
                        <input id = "password" type="password" name="password">
                        <i class>See password</i> 
                    </div>
                    <br>

                   
                    
                    <button type="submit" name="submit" class = "login-button">Login</button>
                    
                   
                    
                    <!-- <section class = "legal">
                        <p>By continuing, you will be agreeing to our Terms & Conditions</p>
                    </section> -->
                </form>
            </div>
           
        </div>
       
        
    </body>
</html>

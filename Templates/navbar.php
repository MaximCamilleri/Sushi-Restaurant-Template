<?php
    session_start();
?>

<header>
    <div id="headerTint">
        <nav>
            <img id="logo" src="https://image.freepik.com/free-vector/sushi-restaurant-logo_8169-12.jpg" alt="PogFish Sushi restaurant logo">
            <div class="navbar">
                <ul>
            
                    <li class = "active"><a href = "../Home/index.php"> Home </a> </li>

                        
                    
                    <li><a href = "#">Menu </a> 
                        <div class = "sub-menu">
                            <ul>
                                    <li><a href = "#">Food</a></li>
                                    <li><a href = "#">Drink</a></li>
                            </ul>
                        </div>
                    </li>

            
                    <li><a href = "../Contact/ContactPage/contact.php">Contact</a> 
                        <div class = "sub-contact">
                            <ul>
                                <li><a href = "#">Book a Table</a></li>
                                <li><a href = "../Contact/Events/events.php">Events</a></li>
                                <li><a href = "#">Takeaway</a></li>
                                <li><a href = "../Contact/ContactPage/contact.php">Complaints</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php
                        if(isset($_SESSION["userId"])){
                            echo "<li><a href = '#'>Favourites</a></li>";
                            echo "<li><a href = '../SignUpAndLogIn/includes/logout.inc.php'>logout</a></li>";
                        }else{
                            echo "<li><a href = '../SignUpAndLogIn/login.php'>Login</a></li>";
                            echo "<li><a href = '../SignUpAndLogIn/signup.php'>Signup</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>
        <h1 class="title">PogFish </h1>
        <h2 class="title">Sushi</h2>
    </div>
</header>
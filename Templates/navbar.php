<?php
    session_start();
?>
<div id="headerTint">
    <link rel="stylesheet" href="../TemplatesCss/navbar.css">
    <nav>
        <img id="logo" src="https://image.freepik.com/free-vector/sushi-restaurant-logo_8169-12.jpg" alt="PogFish Sushi restaurant logo">
        <div class="navbar">
            <ul>
                <?php
                    echo '<li class = "active"><a href = "../Home/index.php" >Home </a> </li>';
                ?>
                    
                
                <li><a href = "../FoodMenu/menu.php">Menu </a> 
                    <div class = "sub-menu">
                        <ul>
                                <li><a href = "../FoodMenu/menu.php">Food</a></li>
                                <li><a href = "#">Drink</a></li>
                        </ul>
                    </div>
                </li>

        
                <li><a href = "../Contact/contact.php">Contact</a> 
                    <div class = "sub-contact">
                        <ul>
                            <li><a href = "#">Book a Table</a></li>
                            <li><a href="../Events/events.php">Event</a></li>
                            <li><a href = "#">Takeaway</a></li>
                            <li><a href = "../Contact/contact.php?type=complaints">Complaints</a></li>
                        </ul>
                    </div>
                </li>
                <?php
                    if(isset($_SESSION["userId"])){
                        echo "<li><a href = '../Favourites/favourites.php'>Favourites</a></li>";
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
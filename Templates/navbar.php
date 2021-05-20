<?php
    session_start();
?>

<header>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing:border-box
        }
            /*Navbar css*/

        header{
            background-image: url(../Background/backgroundImg2.png);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #headerTint{
            background-color: rgba(0, 0, 0, 0.8);
            height: 100%;
        }

        .navbar{
            text-align: right;
            padding-right: 8%;
        }

        #logo{
            width: 100px;
            height: 100px;
            max-width: 100px;
            float: left;
            display: inline;
        }

        body{
            background-color: #1a1a1d;
            color: white;
        }

        nav{
            background-color: rgba(0, 0, 0, 0.3); 
            height: 100px; 
            margin-bottom: 10%;
        }

        .navbar ul{
            display: inline-flex;
            list-style: none;
            color: white;
        }

        .navbar ul li
        {
            width: 120 px;
            margin: 15 px;
            background-color: rgb(153, 92, 0);
            border-radius: 3px;
            margin-left: 40px;
            padding: 15px;
            margin-top: 20px;
        }

        .navbar ul li a{
            text-decoration: none;
            color: white;
        }

        .active, .navbar ul li:hover
        {
        background:rgb(153, 92, 0);
        border-radius: 3px;
        }

        /* Menu*/
        .sub-menu{
            display:none;
        }

        .navbar ul li:hover
        {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
        }

        .navbar ul li:hover .sub-menu
        {
            display: block;
            position: absolute;
            background-color: rgb(153, 92, 0);
            margin-top: 15px;
            margin-left: -15px;
        }

        .navbar ul li:hover .sub-menu ul{
            display: block;
            margin: 10px;
            margin-left: -20px; 
        }
        .navbar ul li:hover .sub-menu ul li{
            width: 99px;
            padding: 10 px;
            border-bottom: 1px solid #fff;
            background: transparent;
            border-radius: 0;
            text-align: left;
        }
        .navbar ul li:hover .sub-menu ul li:last-child{
            border-bottom: none;
        }



        /* Contact*/
        .sub-contact{
            display:none;
        }

        .navbar ul li:hover .sub-contact
        {
            display: block;
            position: absolute;
            background-color: rgb(153, 92, 0);
            margin-top: 15px;
            margin-left: -15px;
            
        }

        .navbar ul li:hover .sub-contact ul{
            display: block;
            margin: 10px;
            margin-left: -20px;
        }

        .navbar ul li:hover .sub-contact ul li{
            width: 135px;
            padding: 10 px;
            border-bottom: 1px solid #fff;
            background: transparent;
            border-radius: 0;
            text-align: left;
        }

        .navbar ul li:hover .sub-contact ul li:last-child{
            border-bottom: none;
        }

        .title{
            color: white;
            text-align: center;
            color: rgb(255, 255, 255);
            font-size: 500%;
        }
    </style>
    <div id="headerTint">
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
</header>
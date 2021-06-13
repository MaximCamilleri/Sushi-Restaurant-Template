<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="bookingCSS.css">
        <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E" />
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Raleway:wght@300&family=Ubuntu&display=swap" rel="stylesheet">

    </head>

    <body>

        <?php
        include "tempNavbar.php";
        ?>

        <form method="POST" action="includes/booking.inc.php">

            <p id = "bookingHeader">
                Reservation
            </p>

            <p id = "bookingTitle">
                Book Your Table
            </p>

            <p id = "formLabel">
                Name
            </p>

            <input type="text" id="name" class = "textbox" placeholder="Name" name = "name">

            <p id = "formLabel">
                Contact Number
            </p>     
        
            <input type="text" id="nos" class = "textbox" placeholder="Number" name = "tel"/>

            <p id = "formLabel">
                Date
            </p>

            <input type="text" id="date" class = "textbox" placeholder="Date" name = "date"/>

            <p id = "formLabel">
                Time
            </p>

            <input type="text" id="time" class = "textbox" placeholder="Time AM/PM" name = "time"/>

            <p id = "formLabel">
                Number Of Guests
            </p>

            <p class = "textbox">
            <select name="guests" id = "guestOptions">
                <option value="1">1 Guest</option>
                <option value="2">2 Guests</option>
                <option value="3">3 Guests</option>
                <option value="4">4 Guests</option>
                <option value="5">5 Guests</option>
                <option value="6">6 Guests</option>
                <option value="7">7 Guests</option>
                <option value="8">8 Guests</option>
                <option value="9">9 Guests</option>
                <option value="10">10 Guests</option>          
            </select>
            </p>

            <button type = "submit" value = "Submit" id = "submitReserve" name = "subBooking">Reserve</button>

        </form>

        <footer>
            <p id = "lFootnote">&copy pogfishsushi, All Rights Reserved. Designed by Max Camilleri, Mathias Vaaben, Lucas Lautier</p>
            <p id = "rFootnote"> * If the number of guests is larger than 10, please go to the "Events" section in the "Contact" tab.</p>
        </footer>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="newBookingCSS.css">
        <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E" />
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Raleway:wght@300&family=Ubuntu&display=swap" rel="stylesheet">

    </head>

    <body>

        <?php
        include "tempNavbar.php";
        ?>

        <form action="booking.inc.php">

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

            <input type="text" id="time" class = "textbox" placeholder="Time AM/PM" name = time/>

            <p id = "formLabel">
                Number Of Guests
            </p>

            <p class = "textbox">
            <select name="guests" id = "guestOptions" name = guest>
                <option value="oneG">1 Guest</option>
                <option value="twoG">2 Guests</option>
                <option value="threeG">3 Guests</option>
                <option value="fourG">4 Guests</option>
                <option value="fiveG">5 Guests</option>
                <option value="sixG">6 Guests</option>
                <option value="sevenG">7 Guests</option>
                <option value="eightG">8 Guests</option>
                <option value="nineG">9 Guests</option>
                <option value="tenG">10 Guests</option>          
            </select>
        </p>

            <button type = "button" form = "bookings" value = "Submit" id = "submitReserve" >Reserve</button>

        </form>

        <footer>
            <p id = "lFootnote">&copy pogfishsushi, All Rights Reserved. Designed by Max Camilleri, Mathias Vaaben, Lucas Lautier</p>
            <p id = "rFootnote"> * If the number of guests is larger than 10, please go to the "Events" section in the "Contact" tab.</p>
        </footer>
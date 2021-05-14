<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="cssBooking.css">
        <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E" />
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Raleway:wght@300&family=Ubuntu&display=swap" rel="stylesheet">

    </head>

    <body>
        <header>
                <nav>
                    <img id="logo" src="https://image.freepik.com/free-vector/sushi-restaurant-logo_8169-12.jpg" alt="PogFish Sushi restaurant logo">
                    <div class="navbar">
                        <ul>
                  
                          <li class = "active"><a href = "#"> Home </a> </li>
                  
                            <li><a href = "#">Menu </a> 
                              <div class = "sub-menu">
                                  <ul>
                                          <li><a href = "#">Food</a></li>
                                          <li><a href = "#">Drink</a></li>
                                  </ul>
                              </div>
                           </li>
                  
                  
                            <li><a href = "#">Contact</a> 
                              <div class = "sub-contact">
                                  <ul>
                                      <li><a href = "#">Book a Table</a></li>
                                      <li><a href = "#">Events</a></li>
                                      <li><a href = "#">Takeaway</a></li>
                                      <li><a href = "#">Complaints</a></li>
                                  </ul>
                              </div>
                          </li>
                  
                  
                      </ul>
                      </div>
                </nav>          
        </header>
        <div class = "background">
            <div class =  "box">
                <p id = "bookingHeader">
                    Reservation:
                </p>
                <p id = "bookingTitle" >
                  Book Your Table
             </p>

            <form action="booking.inc.php">
                <p class = "textboxTitle"> Name</p>
                        <input type="text" id="name" class = "textbox" placeholder="Name" name = "name"/>

                    <p class = "textboxTitle"> Contact Number</p>
                        <input type="text" id="nos" class = "textbox" placeholder="Number" name = "tel"/>
                
                    <p class = "textboxTitle"> Date</p>
                    <input type="text" id="date" class = "textbox" placeholder="Date" name = "date"/>
                    

                    <p class = "textboxTitle"> <label for="options" > Guests * </label> </p>
                    
                    <p id = "guestNumber" class = "textbox" placeholder = "Guests">
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

                <p class = "textboxTitle"> Time</p>
                    <input type="text" id="time" class = "textbox" placeholder="Time AM/PM" name = time/> 
                
                <p>
                <button type = "submit" form = "bookings" value = "Submit" id = "submitReserve" >Reserve</button>
                </p>
            </form> 
                

    </div> 
    </div>    
            
       

        <footer>
            <p>&copy pogfishsushi, All Rights Reserved. Designed by Max Camilleri, Mathias Vaaben, Lucas Lautier</p>
            <p id = "footnote"> * If the number of guests is larger than 10, please go to the "Events" section in the "Contact" tab.</p>
          </footer>
  
       
    </body>
</html>
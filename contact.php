<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PogFish Sushi</title>
        <link rel="stylesheet" href="contactStyles.css">
        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Raleway:wght@300&family=Ubuntu&display=swap" rel="stylesheet">

    </head>

    <body>
      <header>
        <div id="headerTint">
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
            <h1 class="title">PogFish </h1>
            <h2 class="title">Sushi</h2>
        </div>
    </header>
        <main>
            <div class="split left">
                <h2>Our Details</h2>
                <br>
                <h3 class="details">Address:</h3>
                <p>Pogfish Sushi, Marfa Road, Valletta, Malta</p>
                <br>
                <h3 class="details">Phone and Email:</h3>
                <p>+356 2170 8463</p>
                <p id = "email">info@pogfishsushi.com</p>
                <br>
                <h3 class="details">Opening Hours:</h3>
                <table id="openingHours">
                    <tr>
                      <th>Day</th>
                      <th>Hour</th>
                    </tr>
                    <tr>
                      <td>Monday - Friday</td>
                      <td>11AM - 10PM</td>
                    </tr>
                    <tr>
                      <td>Saturday</td>
                      <td>10AM - 12AM</td>
                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td>10AM - 11PM</td>
                      </tr>
                  </table>
              </div>
              
              <div class="split right">
                <h2>Contact Us</h2>
                <br>
                
                <form>
                    <label for="options">What do you want to contact us about?</label>
                    <select id = "dropdownContact" name="msgType" id="msgType">
                        <option value="general">General</option>
                        <option value="event">Event</option>
                        <option value="complaint">Complaint</option>                        
                     </select>                 
                    <input class = "contactSub" type="submit" value="Submit">
                    <br>
                    <br>
                  <label>Name:</label>
                  <br>
                  <input type="text" id = "form1" placeholder="John Doe">
                  <br><br>
                  <label for="lname">Email:</label>
                  <br>
                  <input type="text" id = "form1" placeholder="thisIsAnEmail@gmail.com">
                  <br><br>
                  <label for="lname">Details:</label>
                  <br>
                  <textarea type="text" id = "form2" placeholder="The restaurant is greater 10/10 would come here again"></textarea>
                </form> 
              </div>       
        </main>

        <footer>
          <p>&copy pogfishsushi, All Rights Reserved. Designed by Max Camilleri, Mathias Vaaben, Lucas Lautier</p>
        </footer>

    </body>
</html>
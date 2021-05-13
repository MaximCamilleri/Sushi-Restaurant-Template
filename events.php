<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PogFish Sushi</title>
        <link rel="stylesheet" href="eventStyles2.css">

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
            <h1 class="title">Sushi</h1>
        </div>
    </header>
        <main>
          
            <h2>Organize an Event at PogFish Sushi</h2>
            <h3>Fill in Your Details</h3>
            <form>
                <!--
                <div class = "split left">
                    <label for = "firstName">First Name</label>
                    <br><br>
                    <input type = "text" id = "form1" placeholder="John">
                </div>
                <div class = "split right">
                    <label for = "lastName">Last Name</label>
                    <br><br>
                    <input type = "text" id = "form1" placeholder = "Doe">
                </div>
                
                <label for = "firstName">First Name</label>
                <br><br>
                <input type = "text" id = "form1" placeholder="John">
                <br><br><br>
                <label for = "lastName">Last Name</label>
                <br><br>
                <input type = "text" id = "form1" placeholder = "Doe">
                <br><br><br>
                <label for = "emailDetails" id = "latter">Email</label>
                <br><br>
                <input type = "text" id = "form1" placeholder = "JohnDoe@email.com">
                <br><br><br>
                <label for = "emailDetails" id = "latter">Phone</label>
                <br><br>
                <input type = "text" id = "form1" placeholder = "9981 2921">
                <br><br><br>
                -->
                <table id = "formApp">
                    <tr>
                        <td><label for = "firstName">First Name</label></td>
                        <td><label for = "lastName">Last Name</label></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><input type = "text" id = "tableForm" placeholder= "John"></td>
                        <td><input type = "text" id = "tableForm" placeholder = "Doe"></td>
                    </tr>                    
                </table>
                <br><br>
                <label for = "emailDetails" id = "latter">Email</label>
                <br><br>
                <input type = "text" id = "form2" placeholder = "JohnDoe@email.com">
                <br><br><br>
                <label for = "emailDetails" id = "latter">Phone</label>
                <br><br>
                <input type = "text" id = "form2" placeholder = "2154 3860">
                <br><br><br>
                <table id = "formApp2">
                    <tr>
                        <td><label for = "eventType">Event Time</label></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="time" value="lunch">
                            <label for="lunch">Lunch</label><br>
                        </td>
                        <td>
                            <input type="radio" name="time" value="dinner">
                            <label for="dinner">Dinner</label><br>
                        </td>
                        <td>
                            <input type="radio" name="time" value="reception">
                            <label for="reception">Reception</label><br>
                        </td>
                    </tr>
                </table>
                <br><br>
                <label for="lname">Details</label>
                <br><br>
                <textarea type="text" id = "form3" placeholder="The restaurant is greater 10/10 would come here again"></textarea>
                <br><br><br>
            </form>

        </main>

    </body>

    <footer>
        <p>&copy pogfishsushi, All Rights Reserved. Designed by Max Camilleri, Mathias Vaaben, Lucas Lautier</p>
    </footer>
</html>
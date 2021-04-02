<?php
  include 'header.php';
?>
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
                <table style="width:50%">
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
                  <input type="text" id = "form1" placeholder="John Do">
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
    </body>
</html>
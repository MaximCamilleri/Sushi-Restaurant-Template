<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PogFish sushi</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="slideShow.css">
        <script src="slideShow.js"></script>
    </head>

    <body>
        <?php
            include "../Templates/navbar.php";
        ?>

        <main>
            <div class = "about" id = "textRow">
                <div id = "about-header"> PogFish Sushi is a world renowned sushi restaurant </div>
                <br>
                <div class = about-text>
                 <p>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Libero quis quas rem laborum repellat similique explicabo.
                   Sapiente voluptas nulla minus eius itaque optio quidem tenetur.
                   Nam ad ex repellendus recusandae.
                 </p>
              </div>
 
              <!--Table-->
              <div id = "tableDiv">
                 <table>
                     <tr>
                        <th style = "padding-bottom: 30px;" >Opening Hours</th>             
                     </tr>
                    <tr>
                       <td>Mon - Fri</td> 
                       <td>11AM - 10 PM</td>
                    </tr>
 
                    <tr>
                        <td>Sat</td>
                        <td>10AM - 12AM</td>
                    </tr>
 
                    <tr>
                     <td>Sun</td>
                     <td>10AM - 11PM</td>
                 </tr>
             
                </table>
            </div>  

            <div class="slideshow-container">
                <div class="mySlides fade" id="firstImg">
                    <img class="slideshowImg"  src="images/slide2.jpg" alt="">
                </div>

                <div class="mySlides fade">
                    <img class="slideshowImg" src="images/slide1.jpg" alt="">
                </div>

                <div class="mySlides fade">
                    <img class="slideshowImg" src="images/slide3.jpg" alt="">
                </div>

                <!--change image buttons-->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </main>
        
        <footer>
            <p>&copy pogfishsushi, All Rights Reserved. Designed by Max Camilleri, Mathias Vaaben, Lucas Lautier</p>
        </footer>

    </body>
</html>
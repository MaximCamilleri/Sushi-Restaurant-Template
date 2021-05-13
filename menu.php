<!doctype html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>PogFish Sushi</title>
        <!-- <link rel="stylesheet" href="contactStyles.css"> -->
        <link rel="stylesheet" href="loginCSS.css">
        <!--<link rel="stylesheet" href="styles.css">-->
        <link rel="stylesheet" href="navbarStyles.css">

        <!-- Gallery links -->
        <link href="gallery.css" rel="stylesheet">
        <script src="gallery.js"></script>

        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Raleway:wght@300&family=Ubuntu&display=swap" rel="stylesheet">

    </head>
    <body>

    <?php
     include 'header2.php';        
    ?>

    <main>

    <div class="gallery">

    <?php
    $images = glob("images/gallery/". "*.{jpg,jpeg,gif,png,bmp,webp}");
    foreach ($images as $i) {
        printf("<img src='gallery/%s'/>", basename($i));
      }
    ?>

    </main>

    </body>
</html>
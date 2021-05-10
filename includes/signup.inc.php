<?php
    include_once "dbh.inc.php";

    if(isset($_POST["submit"])){

    }else{
        
    }

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $telNumber = $_POST['telNumber'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (user_firstname, user_lastname, user_email, user_telNumber, user_password) VALUES ($firstname, $lastname, $email, $telNumber, $password);";
    mysqli_query($conn, $sql);

    header("Location: creatAcc.php");

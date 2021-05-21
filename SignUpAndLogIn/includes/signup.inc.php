<?php
    if(isset($_POST["submit"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        require_once "../../GeneralIncludes/dbh.inc.php";
        require_once "functions.inc.php";

        if(emptyInput($firstname, $lastname, $email, $password) !== false){
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if(invalidEmail($email) !== false){
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        if(emailExists($email, $conn) !== false){
            header("location: ../signup.php?error=emailexists");
            exit();
        }

        createUser($conn, $firstname, $lastname, $email, $password);


    }else{
        header("location: ../signup.php");
    }

    

    $sql = "INSERT INTO users (user_firstname, user_lastname, user_email, user_telNumber, user_password) VALUES ($firstname, $lastname, $email, $telNumber, $password);";
    mysqli_query($conn, $sql);

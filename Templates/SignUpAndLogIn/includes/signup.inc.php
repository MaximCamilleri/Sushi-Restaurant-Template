<?php
    if(isset($_POST["submit"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        require_once "../../../GeneralIncludes/dbh.inc.php";
        require_once "functions.inc.php";

        //checks to ensure the data was inputed correctly 
        if(emptyInput($firstname, $lastname, $email, $password) !== false){
            header("location: ../../signup.php?error=emptyinput");
            exit();
        }
        if(invalidEmail($email) !== false){
            header("location: ../../signup.php?error=invalidemail");
            exit();
        }
        if(emailExists($email, $conn) !== false){
            header("location: ../../signup.php?error=emailexists");
            exit();
        }

        createUser($conn, $firstname, $lastname, $email, $password);


    }else{
        header("location: ../../signup.php");
    }

    
    //sql query that inserts a user into the database
    $sql = "INSERT INTO users (user_firstname, user_lastname, user_email, user_telNumber, user_password) VALUES ($firstname, $lastname, $email, $telNumber, $password);";// 2 ;'s one for the sql one for php
    mysqli_query($conn, $sql);
    //redirect to the home page
    header("location: ../../home.php");

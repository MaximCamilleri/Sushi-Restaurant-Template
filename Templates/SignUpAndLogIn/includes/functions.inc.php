<?php
//empty input check
function emptyInput($firstname, $lastname, $email, $password){
    $result = false;
    if(empty($firstname) || empty($lastname) || empty($email) || empty($password)){ //checking all vars
        $result = true;
    }
    return $result;
}

function invalidEmail($email){
    $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //in build command for checking if an email is valid
        $result = true;
    }
    return $result;
}

//checking if the email is in the database
function emailExists($email, $conn){
    $sql = "SELECT * FROM users WHERE usersEmail = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed1");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
    
}

function createUser($conn, $firstname, $lastname, $email, $password){
    $sql = "INSERT INTO users (usersName, usersSurname, usersPassword, usersEmail) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    //checking for attacks
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../../signup.php?error=stmtfailed2");
        exit();
    }
    //hashing the password
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    //setting the data to be uploaded
    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $hashedPwd, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    header("location: ../../signup.php?error=none");

}

function emptyInputLogin($email, $password){
    $result = false;
    if(empty($email) || empty($password)){
        $result = true;
    }
    return $result;
}

function loginUser($conn, $email, $password){
    $exists = emailExists($email, $conn);

    if($exists === false){
        header("location: ../../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $exists["usersPassword"];
    $checkPwd = password_verify($password, $pwdHashed);
    if($checkPwd === false){
        header("location: ../../login.php?error=wronglogin");
    }else if($checkPwd === true){
        session_start();
        $_SESSION["userId"] = $exists["userId"]; //makes the userId accesable accross the website 
        $_SESSION["email"] = $exists["usersEmail"]; //makes the email accesable accross the website 
        header("location: ../../home.php");
        exit();
    }
}
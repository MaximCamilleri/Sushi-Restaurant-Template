<?php

if(isset($_POST['submit'])){
    $newfileName = $_POST['name'];
    if($_POST['name']){
        $newfileName = "gallery";
    }else{
        $newfileName = strtolower(str_replace(" ", "-", $fileName));
    }
    $title = $_POST['title'];
    $ingredients = $_POST['ingredients'];
    $price = $_POST['price'];
    $file = $_FILES['file'];

    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileTmp = $file["tmp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];

    $fileExplode = explode(".",$fileName);
    $fileExt = strtolower(end($fileExplode));

    $allowedExt = array("jpg", "jpeg", "png");

    if(in_array($fileExt, $allowed)){
        if($fileError === 0){
            if($fileSize > 2000000){
                header("menu.php?error=size");
            }else{
                $imageFullName = $newfileName . "." . uniqid("", true) . $fileExt;
                $fileDestination = "images/gallery/" . $imageFullName;

                include_once "dnh.menu.inc.php";
                if(emptyInput($title, $ingredients, $price, $file) == true){
                    header("../menu.php?error=emptyInput")
                    exit();
                }else{
                    $sql = "SELECT * FROM sushi;"
                }
            }
        }else{
            header("../menu.php?error=error");
            exit();
        }
    }else{
        header("../menu.php?error=fileExt");
        exit();
    }
}
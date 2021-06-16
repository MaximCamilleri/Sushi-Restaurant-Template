<?php

if(isset($_POST['submit'])){
    $newfileName = $_POST['filename'];
    if(empty($newfileName)){
        $newfileName = "gallery";
    }else{
        $newfileName = strtolower(str_replace(" ", "-", $newfileName));
    }
    $title = $_POST['title'];
    $price = $_POST['price'];
    $file = $_FILES['file'];
    $section = $_POST['section'];

    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileTmp = $file["tmp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];

    include_once "menuFunctions.inc.php";

    $fileExplode = explode(".",$fileName);
    $fileExt = strtolower(end($fileExplode));

    $allowedExt = array("jpg", "jpeg", "png");

    if(in_array($fileExt, $allowedExt)){
        if($fileError === 0){
            if($fileSize > 2000000){
                header("Location: ../../drinks.php?error=size");
            }else{
                $imageFullName = $newfileName . "." . uniqid("", true) . "." . $fileExt;
                $fileDestination = "../images/gallery/" . $imageFullName;

                include_once "../../../GeneralIncludes/dbh.inc.php";
                if(emptyInput($title, $price, $file, "fill", "fill") == true){
                    header("Location: ../../drinks.php?error=emptyInput");
                    exit();
                }else{
                    $sql = "SELECT * FROM drinks_menu;";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../../drinks.php?error=stmt");
                    }else{
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowCount = mysqli_num_rows($result);
                        $setOrder = $rowCount + 1;

                        $sql = "INSERT INTO drinks_menu (itemName, itemPrice, itemImg, itemOrder, itemType) VALUES (?, ?, ?, ?, ?);";
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header("Location: ../../drinks.php?error=stmt");
                        } else{
                            mysqli_stmt_bind_param($stmt, "sssss", $title, $price, $imageFullName, $setOrder, $section);
                            mysqli_stmt_execute($stmt);

                            move_uploaded_file($fileTmp, $fileDestination);

                            header("Location: ../../drinks.php?error=none");
                        }
                    }
                }
            }
        }else{
            header("Location: ../../drinks.php?error=error");
            exit();
        }
    }else{
        header("Location: ../../drinks.php?error=fileExt");
        exit();
    }
}
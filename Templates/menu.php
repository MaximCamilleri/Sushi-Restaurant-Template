<?php

    require_once '../bootstrap.php';
    include_once "../GeneralIncludes/dbh.inc.php";

    session_start();
    $loggedIn = FALSE;
    $userId = -1;
    if(isset($_SESSION['userId'])){
        $loggedIn = True;
        $userId = $_SESSION['userId'];
    }

    $types = ['starter', 'sushi','soup', 'curry', 'accompanimaents', 'dessert'];
    $current = 0;
    $menu = [];
    $dir = "C:/xampp/htdocs/cis1054//FoodMenu/menuItem.html";
    while($current < sizeof($types)){
        $sql = "SELECT * FROM food_menu WHERE itemType = '$types[$current]' ORDER BY itemOrder ASC;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "bol";
        }else{
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $menu[$current] = $result;
            $current++;
        }
        
    }

    $admin = FALSE;
    
    if($userId == 3){
        
        $admin = TRUE;
    }

    echo $twig->render("FoodMenu/menu.html", ["loggedIn" => $loggedIn, 'starter' => $menu[0], 'sushi' => $menu[1], 
    'soup' => $menu[2], 'curry' => $menu[3], 'accompanimaents' => $menu[4], 
    'dessert' => $menu[5], 'admin' => $admin]);


    


    
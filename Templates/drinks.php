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

    $types = ['softdrinks', 'juice','water', 'alcoholicDrinks', 'hotDrinks', 'liquor'];
    $current = 0;
    $menu = [];
    $dir = "C:/xampp/htdocs/cis1054//FoodMenu/menuItem.html";
    while($current < sizeof($types)){
        $sql = "SELECT * FROM drinks_menu WHERE itemType = '$types[$current]' ORDER BY itemOrder ASC;";
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

    echo $twig->render("DrinksMenu/menu.html", ["loggedIn" => $loggedIn, 'softdrinks' => $menu[0], 'juice' => $menu[1], 
    'water' => $menu[2], 'alcoholicDrinks' => $menu[3], 'hotDrinks' => $menu[4], 
    'liquor' => $menu[5], 'admin' => $admin]);


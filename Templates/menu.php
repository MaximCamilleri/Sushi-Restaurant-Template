<?php

    require_once '../bootstrap.php';
    include_once "../GeneralIncludes/dbh.inc.php";

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
        }
        $menu[$current] = $result;
        $current++;
    }
    echo $twig->render($dir, ['starter' => $menu[0]], ['sushi' => $menu[1]], ['soup' => $menu[2]], ['curry' => $menu[3]], ['accompanimaents' => $menu[4]], ['dessert' => $menu[5]]);


    


    
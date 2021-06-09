<?php

function emptyInput($title, $ingredients, $price, $file){
    $result = false;
    if(empty($title) || empty($ingredients) || empty($price) || empty($file)){
        $result = true;
    }
    return $result;
}
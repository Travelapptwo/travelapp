<?php
function e($params){
    if(is_array($params)){
        echo "<pre>";
        var_dump($params);
    }
    else if(is_string($params)){
        echo "<pre>";
        var_dump($params);
    }
}
function P($params){
    return  $_POST[$params];
}

function G($params){
    return  $_GET[$params];
}
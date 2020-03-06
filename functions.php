<?php

function isadult($age){
    if($age >= 21){
        return true;
    }

    return false;
}

function dump($variable){
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

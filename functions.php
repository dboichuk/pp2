<?php
function printArr($array){
    foreach ($array as $i){
        echo "$i <br>";
    }
}

function largest($array){
    return max($array);
}

function removeDups($array){
    return array_unique($array);
}

function distribution($array){
    return array_count_values($array);

}
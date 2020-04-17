<?php
// Dmytro Boichuk
// 4/17/2020
// http://dboichuk.greenriverdev.com/328/pp2/index.php

ini_set('display_errors',1);
error_reporting(E_ALL);

echo "<h1>Php Array Practice</h1><br>";

echo "<p>Step 2:</p><br>";
$numbers=array(7,9,8,9,8,8,6);

function printArr($array){
    foreach ($array as $i){
        echo "$i <br>";
    }
}

printArr($numbers);
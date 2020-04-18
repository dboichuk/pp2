<?php
// Dmytro Boichuk
// 4/17/2020
// http://dboichuk.greenriverdev.com/328/pp2/index.php

ini_set('display_errors',1);
error_reporting(E_ALL);

include ("functions.php");

echo "<h1>Php Array Practice</h1><br>";

echo "<p>Step 2:</p><br>";
$numbers=array(7,9,8,9,8,8,6);


printArr($numbers);

echo "<p>Step 3:</p><br>";

echo "<p>Step 4:</p><br>";

$largestNum=largest($numbers);
echo "$largestNum<br>";

echo "<p>Step 5:</p><br>";
$newNums=removeDups($numbers);
printArr($newNums);

echo "<p>Step 6:</p><br>";

$assosArray=distribution($numbers);
ksort($assosArray);
echo"[";
foreach ($assosArray as $k=>$v){
    echo"$k=>$v, ";
}
echo"]";
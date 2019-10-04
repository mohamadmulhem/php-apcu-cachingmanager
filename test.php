<?php
require 'CachingManager.php';

//store a value
CachingManager::Store("name", "Mike");
//check if exists
$valueExists = CachingManager::Exists("name")? 'Yes':'No';
$value = CachingManager::Get("name");
//echo results
echo "Value Exists: " . $valueExists . "</br>";
echo "-------- </br>";
echo "Value: " . $value . "</br>";

//clear value
echo "-------- </br>";
CachingManager::Reset("name");
echo "clearing value ..." . '</br>';

echo "-------- </br>";
$value = CachingManager::Get("name");
if(!$value){
    $value = "None";
}
$valueExists = CachingManager::Exists("name")? 'Yes':'No';
echo "Value Exists: " . $valueExists . "</br>";
echo "-------- </br>";
echo "Value: " . $value . "</br>";
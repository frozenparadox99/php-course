<?php

// Array init
$names = array('Zeke', 'Levi', 'Eren', 'Ymir');

echo "<pre>";
print_r($names);

$cities = ['London', 'New York', 'Noida'];
print_r($cities);

$mixed = array(5, 4, "hi", "number");
print_r($mixed);

echo "<br>";

// Array looping
echo "<ol>";

foreach ($names as $name) {
    echo "<li>" . $name . "</li>";
}

echo "</ol>";

echo "<br>";
// Split a string

$word = "Christmas";

$letters = str_split($word, 3);

print_r($letters);

echo "<br>";
// Sort data in an array

$numbers = array(5, 1, 77, 33, 22, 78, 2, 50);

sort($numbers);

echo "<ol>";

foreach ($numbers as $num) {
    echo "<li>" . $num . "</li>";
}

echo "</ol>";


echo "<br>";
//Exploding and imploding strings
$string = "Levi, Zeke, Erin, Ymir";
$names = explode(", ", $string);
print_r($names);

$imploded = implode("|", $names);
echo $imploded;

echo "<br>";
echo "<br>";
echo "<br>";
// Add or remove elements from an array

array_push($cities, 'Paris', 'Berlin', 'Tokyo');
array_unshift($cities, 'Dublin');
$lastCity = array_pop($cities);
echo $lastCity . "<br>";
print_r($cities);


// Slice an array

$result = array_slice($cities, 2);
print_r($result);

$result = array_slice($cities, 0, 2);
print_r($result);

$result = array_slice($cities, -2, 2);
print_r($result);
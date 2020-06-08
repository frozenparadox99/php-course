<?php

$cities = ['London', 'New York', 'Noida', 'Tokyo', 'Berlin', 'Amsterdam'];

echo "<pre>";
print_r($cities);

// Create an associative array
$students = array("Levi" => 12, "Erin" => 14, "Zeke" => 20);
print_r($students);

echo "<br>";


// loop through them
foreach ($students as $student => $age) {
    echo $student . " is " . $age . " years old" . "<br>";
}
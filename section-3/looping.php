<?php

// for loops

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "<br>";
echo "<br>";

// while loops
$j = 10;

while ($j >= 0) {
    echo $j . "<br>";
    $j--;
}

echo "<br>";
echo "<br>";

// fizz buzz in php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "Fizz Buzz" . "<br>";
    } else if ($i % 3 === 0) {
        echo "Fizz" . "<br>";
    } else if ($i % 5 === 0) {
        echo "Buzz" . "<br>";
    } else {
        echo $i . "<br>";
    }
}
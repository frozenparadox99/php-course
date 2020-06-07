<?php

// Count words 
$sentence = "This is a sentence";
$words = str_word_count($sentence);
echo "The number of words in - " . $sentence . " are : " . $words . "<br>";

// Replace Characters in a string
$string = "Goku|Vegeta|Eren|Naruto|Sasuke";
$newString = str_replace('|', ', ', $string);

echo "New string is : " . $newString . "<br>";

// Randomize chars in a string
$testString = "basketball";
$new_string = str_shuffle($testString);

echo $testString . " ----> " . $new_string . "<br>";

// Escape char in strings

echo "Tom is a very \"good\" cat ";
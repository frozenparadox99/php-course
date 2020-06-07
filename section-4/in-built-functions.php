<?php

// 1) pi
echo pi();
echo "<br>";

// 2) strlen
$str = "Find the length of this string";
echo $str . "<br>";

$len = strlen($str);

echo $len . "<br>";

// 3) getDate
$today = getdate();
print_r($today);

// 4) Random number generation
$anyRandomNumber = rand();
$betweenMinAndMax = rand(5, 10);

echo "<br>" . "any random number : " . $anyRandomNumber;
echo "<br>" . "between 5 and 10 : " . $betweenMinAndMax . "<br>";

// 5) date function
echo "The year is " . date("Y") . "<br>";
echo "The day is " . date("l") . "<br>";
echo "The time is " . date("g:i a") . "<br>";

// 6) time functions
echo time() . "<br>";
$date  = strtotime("1st January 2020");

$seconds =  time() - $date;
$minutes = $seconds / 60;
$hours = $minutes / 60;
$days = $hours / 24;

echo "Days since 1st Jan 2020 = " . ceil($days) . "<br>";
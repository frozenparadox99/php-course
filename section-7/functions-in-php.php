<?php

function Hello()
{
    echo "Hello World";
}

Hello();

echo "<br>";

function add()
{
    global $c;
    $a = 1;
    $b = 2;
    $sum = $a + $b + $c;
    echo $sum;
}


$c  = 5;
add();

echo "<br>";

// Pass arguments to a function

function multiply($number1, $number2)
{
    $result = $number1 * $number2;
    echo $result . "<br>";
}

multiply(5, 3);


// returning values

function upperCase($name)
{
    $res = strtoupper($name);
    return $res;
}

$result = upperCase("lenka");
echo $result . "<br>";

function calculate($num1, $num2)
{
    $add = $num1 + $num2;
    $sub = $num1 - $num2;

    return array($add, $sub);
}

$results = calculate(10, 9);
echo "<pre>";
print_r($results);
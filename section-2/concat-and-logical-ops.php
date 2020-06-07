<?php

$first = 'Sush';
$last = 'Lenks';

echo $first . ' ' . $last;

echo '<br>';

// Concat big strings

$sentence1 = "This is a very long sentence.";
$sentence1 .= " I am adding more lines.";
$sentence1 .= " Chain on even more.";
$sentence1 .= " Finally display this.";

echo $sentence1;

echo '<br>';

// Logical and Comparison Operators

$a = 5;
$b = 6;

$comp1 = $a !== $b;
$comp2 = $a < $b;

echo "equality" . " : " . $comp1;
echo '<br>';
echo "comparison" . " : " . $comp2;

// Increment and Decrement

$a += 1;
echo '<br>';
echo $a;
$a--;
echo '<br>';
echo $a;
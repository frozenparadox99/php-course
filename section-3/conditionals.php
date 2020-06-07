<?php

$a = 5;
$b = 5;

if ($a === $b) {
    echo "TRUE";
} elseif ($a === 5 && $b < 5) {
    echo "B is smaller";
} else {
    echo "a is not 5 or b is greater than 5";
}
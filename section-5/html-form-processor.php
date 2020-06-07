<?php

if (isset($_POST["submit"])) {
    echo "<pre>";
    print_r($_POST);

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $surname = $_POST["surname"];
    $gender = $_POST["gender"];

    echo "Your surname is : " . $surname . " and your gender is : " . $gender;

    echo "<br>";
    echo "<br>";
    echo "<br>";
}
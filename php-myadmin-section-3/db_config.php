<?php

$db_host = "localhost";
$db_name = "mybookstore";
$db_username = "sushant";
$db_password = "sush";


$dsn = "mysql:host=$db_host;dbname=$db_name";

try {
    $db_connection = new PDO($dsn, $db_username, $db_password);
} catch (Exception $e) {
    echo "There was a failure - " . $e->getMessage();
}
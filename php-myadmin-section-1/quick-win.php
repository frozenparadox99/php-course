<?php

$db_host = "localhost";
$db_name = "company";
$db_username = "sushant";
$db_password = "sush";


$dsn = "mysql:host=$db_host;dbname=$db_name";


$db_connection = new PDO($dsn, $db_username, $db_password);

$query = "SELECT * FROM users";

$results  = $db_connection->query($query);

$db_connection = NULL;

foreach ($results as $result) {
    echo $result["firstName"] . " ----- " . $result["email"];
    echo "<br>";
}
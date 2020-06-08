<?php

require_once("../db_config.php");

$query = "SELECT title , author FROM  books";

$db_connection->query($query);

if ($results  = $db_connection->query($query)) {
    foreach ($results as $result) {
        echo $result["title"] . " ----- " . $result["author"];
        echo "<br>";
    }
} else {
    echo "No results to display";
}



$db_connection = NULL;
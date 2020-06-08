<?php

require_once("../db_config.php");

$query = "UPDATE books
          SET author = 'sushant'
          WHERE id = 118  
";

if ($db_connection->exec($query)) {
    echo "Success";
} else {
    echo "Update Failed";
}

$db_connection = NULL;
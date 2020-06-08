<?php

require_once("../db_config.php");

$query = "UPDATE teachers
          SET email = 'kakashi@hatake.com'
          WHERE id = 75  
";

if ($db_connection->exec($query)) {
    echo "Success";
} else {
    echo "Update Failed";
}

$db_connection = NULL;
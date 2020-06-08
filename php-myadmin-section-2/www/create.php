<?php

require_once("../db_config.php");

$query = "INSERT INTO teachers (id,firstName,surname,dob,email,startDate)
          VALUES (NULL,'Kakashi','Hatake','1988-11-11','kaka@hatake.com','2009-09-09')  
";


if ($db_connection->exec($query)) {
    echo "Success";
} else {
    echo "Failure";
}

$db_connection = NULL;
<?php

require_once("../db_config.php");

$query = "INSERT INTO books (id,title,author,genre,height,publisher)
          VALUES (NULL,'My Book','Sush','Slice of Life','420','Penguin')  
";


if ($db_connection->exec($query)) {
    echo "Success";
} else {
    echo "Failure";
}

$db_connection = NULL;
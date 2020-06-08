<?php

require_once("../db_config.php");

if (!isset($_GET['id'])) {
    header('Location: list-books.php');
    die();
} else {
    if (!filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
        header('Location: list-books.php');
        die();
    } else {
        $id = $_GET['id'];
        $query = "DELETE FROM books WHERE id = :id LIMIT 1";
        $result = $db_connection->prepare($query);

        $result->execute([
            'id' => $id
        ]);

        $rowsDeleted = $result->rowCount();

        if ($rowsDeleted === 1) {
            echo "Success";
        } else {
            echo "Failure";
        }
    }
}
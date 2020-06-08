<?php

require_once("../db_config.php");
$query = "SELECT * FROM books";
$db_connection->query($query);
$results  = $db_connection->query($query);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Books</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ce2ba3145b.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>TITLE</th>
                    <th>AUTHOR</th>
                    <th>GENRE</th>
                    <th>PUBLISHER</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($results as $result) {
                ?>
                <tr>
                    <td> <?php echo $result['title'] ?> </td>
                    <td> <?php echo $result['author'] ?> </td>
                    <td> <?php echo $result['genre'] ?> </td>
                    <td> <?php echo $result['publisher'] ?> </td>
                    <td class="text-center"> <a href="edit.php?id=<?php echo $result['id'] ?>"> <i
                                class="far fa-edit"></i></a></td>
                    <td class="text-center"> <a href="delete.php?id=<?php echo $result['id'] ?>"> <i
                                class="fas fa-trash"></i> </a> </td>
                </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>
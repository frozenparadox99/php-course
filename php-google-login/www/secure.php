<?php

session_start();
if (!isset($_SESSION['accessToken'])) {
    header("Location login.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secure Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Image</td>
                    <td><img class="w-25" src="<?php echo $_SESSION['image'] ?>" alt="image"></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><?php echo $_SESSION['firstName'] ?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo $_SESSION['surname'] ?></td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td><?php echo $_SESSION['email'] ?></td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" href="logout.php">Log Out</a>
    </div>

</body>

</html>
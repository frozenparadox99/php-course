<?php
require_once("config.php");
if (isset($_SESSION['accessToken'])) {
    header("Location: secure.php");
}
$loginURL = $googleClient->createAuthUrl();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-danger" onclick="window.location = '<?php echo $loginURL ?>' ">
            Login With Google
        </button>
    </div>


</body>

</html>
<?php

session_start();

// Can be used in other files once the session is started
$_SESSION['name'] = 'Goku';
$_SESSION['age'] = 100;
//Data is stored in the server not in any cookie thus its more secure

if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
}

session_destroy();
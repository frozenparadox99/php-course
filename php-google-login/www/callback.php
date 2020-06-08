<?php

require_once("config.php");

if (!isset($_GET['code'])) {
    header("Location: login.php");
    die();
} else {
    $token = $googleClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['accessToken'] = $token;

    $openAuth = new Google_Service_Oauth2($googleClient);
    $userData = $openAuth->userinfo_v2_me->get();
    // echo "<pre>";
    // print_r($userData);
    $_SESSION['email'] = $userData['email'];
    $_SESSION['firstName'] = $userData['givenName'];
    $_SESSION['surname'] = $userData['familyName'];
    $_SESSION['image'] = $userData['picture'];
    header("Location: secure.php");
}
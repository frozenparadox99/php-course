<?php

require_once("config.php");

$googleClient->revokeToken();

session_destroy();
header("Location: login.php");
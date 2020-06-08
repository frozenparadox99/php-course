<?php

setcookie('manga', 'attack on titan', time() + 600);

if (isset($_COOKIE['manga'])) {
    echo $_COOKIE['manga'];
}

setcookie('manga', NULL, time() - 3600);
<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    session_start();

    define('DEFAULT_CONTROLLER', 'home', false);
    define('DEFAULT_METHOD', 'index', false);

    require '../vendor/autoload.php';
    require '../App/Functions/functions_twig.php';
    require 'bootstrap/bootstrap.php';
}

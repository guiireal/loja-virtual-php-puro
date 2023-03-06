<?php

use App\Classes\Template;
use App\Controllers\Controller;
use App\Controllers\Method;

$template = new Template;
$twig = $template->init();

$callController = new Controller;
$calledController = $callController->controller();

$controller = new $calledController();
$controller->setTwig($twig);

$callMethod = new Method;
$method = $callMethod->method($controller);

$controller->$method();
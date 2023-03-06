<?php

namespace App\Controllers;

use App\Classes\Uri;

class Controller
{
    const NAMESPACE_CONTROLLER = "\\App\\Controllers\\";
    const FOLDERS_CONTROLLER = ['Site', 'Admin'];
    const ERROR_CONTROLLER = "\\App\\Controllers\\ErrorController";

    public Uri $uri;

    public function __construct()
    {
        $this->uri = new Uri;
    }

    private function getController(): string
    {
        if (!$this->uri->emptyUri()) {
            $explodeUri = array_filter(explode("/", $this->uri->getUri()));
            return ucfirst($explodeUri[1]) . 'Controller';
        }

        return ucfirst(DEFAULT_CONTROLLER) . 'Controller';
    }

    public function controller(): string
    {
        $controller = $this->getController();

        foreach (self::FOLDERS_CONTROLLER as $folderController) {
            $class = self::NAMESPACE_CONTROLLER . $folderController . "\\" . $controller;
            if (class_exists($class)) {
                return $class;
            }
        }

        return self::ERROR_CONTROLLER;
    }
}
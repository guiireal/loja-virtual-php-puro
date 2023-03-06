<?php

namespace App\Controllers;

use App\Classes\Uri;

class Method
{
    private Uri $uri;

    public function __construct()
    {
        $this->uri = new Uri;
    }

    private function getMethod()
    {
        if (!$this->uri->emptyUri()) {
            $explodeUri = array_filter(explode('/', $this->uri->getUri()));

            return $explodeUri[2] ?? DEFAULT_METHOD;
        }

        return '';
    }

    public function method($object)
    {
        if (method_exists($object, $this->getMethod())) {
            return $this->getMethod();
        }

        return DEFAULT_METHOD;
    }
}
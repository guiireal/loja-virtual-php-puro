<?php

namespace App\Classess;

class Uri
{
    private string $uri;

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    public function emptyUri(): bool
    {
        return $this->uri === '/';
    }

    public function getUri()
    {
        return $this->uri;
    }
}
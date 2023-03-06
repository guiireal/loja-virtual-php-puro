<?php

namespace App\Classes;

class Parameters
{
    private string $uri;
    private array $parameters;

    public function __construct()
    {
        $uri = new Uri;
        $this->uri = $uri->getUri();
    }

    private function explodeParameters(): void
    {
        $explodeUri = explode('/', $this->uri);
        $this->parameters = array_filter($explodeUri);
    }

    public function getParameterMethod($object, $method)
    {
        if (method_exists($object, $method)) {
            $this->explodeParameters();

            if ($method === 'index') {
                return $this->parameters[2] ?? null;
            }

            return $this->parameters[3] ?? null;
        }

        return null;
    }
}
<?php

namespace App\Classes;

class Redirect
{
    public function redirect(?string $redirect = null): void
    {
        if (is_null($redirect)) {
            header("Location: /");
        }

        header("Location: ${redirect}");
    }
}
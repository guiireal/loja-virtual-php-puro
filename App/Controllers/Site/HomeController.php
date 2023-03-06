<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HomeController extends BaseController
{
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function index()
    {
        $template = $this->twig->load('site_home.twig');
        $template->display([
            'title' => 'Loja Virtual'
        ]);
    }
}
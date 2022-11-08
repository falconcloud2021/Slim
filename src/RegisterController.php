<?php

namespace App;

use Twig\Environment;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class RegisterController
{
    private Environment $view;

    public function __construct(Environment $view)
    {
        $this->view = $view;
    }
    
    public function register(Request $request, Response $response, array $args): Response
    {
        $content = $this->view->render('register.twig');
        $response->getBody()->write($content);
        return $response;
    }
}
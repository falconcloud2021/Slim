<?php 

use Slim\Views\Twig;
use Twig\Environment;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class LoginController
{
    private Environment $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }
    
    public function login(Request $request, Response $response, array $args): Response
    {
        $content = $this->view->render('templates/login.twig', [
            'name' => 'login'
        ]);
        $response->getBody()->write($content);
        return $response;
    }
}
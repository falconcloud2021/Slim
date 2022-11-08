<?php

use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface;

require __DIR__ . '/../vendor/autoload.php';

$loader = new FilesystemLoader('templates');
$view = new Environment($loader);

$app = AppFactory::create();

$app->get('/', function(Request $request, Response $response) {
    $response->getBody()->write('Index Page');
    return $response;
});
// Autorisation routes 
$app->get('/register', \RegisterController::class . ':register');
$app->get('/login', \LoginController::class . ':login');
// Dashboard routes 
// $app->group('/admin', function (RouteCollectorProxy $group) {
//     $group->get('/dashboard', \AdminController::class . ':dashboard')->add(new RouteMiddleware());
//     $group->get('/session', \AdminController::class . ':session')->add(new RouteMiddleware());
    
// })->add(new GroupMiddleware());


$app->run();
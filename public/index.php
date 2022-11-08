<?php

use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface;
use App\LoginController;
use App\RegisterController;


require __DIR__ . '/../vendor/autoload.php';

$loader = new FilesystemLoader('../templates');
$view = new Environment($loader);

$app = AppFactory::create();

$app->get('/', function(Request $request, Response $response) use($view) {
    $content = $view->render('index.twig');
    $response->getBody()->write($content);
    return $response;
});

$app->get('/register', function(Request $request, Response $response) use($view) {
    $content = $view->render('register.twig');
    $response->getBody()->write($content);
    return $response;
});
$app->get('/login', function(Request $request, Response $response) use($view) {
    $content = $view->render('login.twig');
    $response->getBody()->write($content);
    return $response;
});
$app->get('/forgot-password', function(Request $request, Response $response) use($view) {
    $content = $view->render('forgot-password.twig');
    $response->getBody()->write($content);
    return $response;
});
$app->get('/recover-password', function(Request $request, Response $response) use($view) {
    $content = $view->render('recover-password.twig');
    $response->getBody()->write($content);
    return $response;
});

$app->get('/dashboard', function(Request $request, Response $response) use($view) {
    $content = $view->render('dashboard.twig');
    $response->getBody()->write($content);
    return $response;
});
$app->get('/desk', function(Request $request, Response $response) use($view) {
    $content = $view->render('desk.twig');
    $response->getBody()->write($content);
    return $response;
});

// // Autorisation routes 
// $app->get('/register', [RegisterController::class, 'register'])->setName('register');
// $app->get('/login', [LoginController::class, 'login'])->setName('login');
// // Dashboard routes 
// $app->group('/admin', function (RouteCollectorProxy $group) {
//     $group->get('/dashboard', [AdminController::class, 'dashboard'])->add(new RouteMiddleware());
//     $group->get('/desk', [AdminController::class, 'session])->add(new RouteMiddleware());
    
// })->add(new GroupMiddleware());


$app->run();
<?php 

use DI\Container;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use App\Controllers\HomeController;

$container = new Container();

AppFactory::setContainer($container);

$container->set('view', function(){
    return Twig::create('../views', ['cache' => false]);
});

$container->set('db', function(){
    return new PDO('mysql:dbname=slim;host=localhost;', 'root', '');
});

$container->set(HomeController::class, function($container){
    $view = $container->get('view');
    $db = $container->get('db');
    return new HomeController($view, $db, $user);
});
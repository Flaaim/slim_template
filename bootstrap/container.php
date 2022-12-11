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

$container->set(HomeController::class, function($container){
    $view = $container->get('view');
    return new HomeController($view);
});
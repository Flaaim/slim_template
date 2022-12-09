<?php 

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/', function(Request $request, Response $response){
    return $this->get('view')->render($response, 'home.twig');
});
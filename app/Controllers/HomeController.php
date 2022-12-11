<?php 

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use PDO;

class HomeController {

    protected $view;
    protected $db;

    public function __construct(Twig $view, PDO $db){
        $this->view = $view;
        $this->db = $db;
    }

    public function index(Request $request, Response $response){
       return $this->view->render($response, 'home.twig');
    }
}
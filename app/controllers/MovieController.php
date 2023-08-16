<?php
declare(strict_types=1);

namespace App\Controller;

use Psr\Container\ContainerInterface;
use App\Model\Movie;

class MovieController {
    public function __construct(ContainerInterface $container, Movie $model) {
        $this -> container = $container;
        $this -> model = $model;
    }

    public function test($request, $response, $args) {
        $movies = [
            '1' => [
                'name' => 'Pulp Fiction',
                'director' => 'Quentin Tarantino'
            ],
            '2' => [
                'name' => 'Rear Window',
                'director' => 'Alfred Hitchcock'
            ]
        ];

        $response -> getBody() -> write(\json_encode($movies));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function read($request, $response, $args){
        $movie = $this->model->find($args['id']);
        $response->getBody()->write(\json_encode($movie));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function index($request, $response, $args){
        $movies = $this->model->findAll();
        $response->getBody()->write(\json_encode($movies));
        return $response->withHeader('Content-Type', 'application/json');  
    }

    public function store($request, $response, $args)
    {
        $params = $request->getParsedBody();
        $id = $this->model->insert($params);
        $response->getBody()->write(\json_encode($params));
        return $response->withHeader('Content-Type', 'application/json');  
    }      

    public function delete($request, $response, $args)
    {
        $params = $request->getParsedBody();
        $id = $this->model->delete($args["id"]);
        $response->getBody()->write(\json_encode($id));
        return $response->withHeader('Content-Type', 'application/json');  
    }      
}

<?php

namespace ToDoApp\controllers;

use Slim\Views\PhpRenderer;
use ToDoApp\models\ToDoModel;

class GetAllToDosController
{
    private $renderer;
    private $toDoModel;

    public function __construct(PhpRenderer $renderer, toDoModel $toDoModel)
    {
        $this->renderer = $renderer;
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $args['toDos'] = $this->toDoModel->getAllToDos();
        $this->renderer->render($response, 'homepage.phtml', $args);
    }
}
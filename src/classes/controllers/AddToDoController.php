<?php

namespace ToDoApp\controllers;

use ToDoApp\models\ToDoModel;

class AddToDoController
{
    private $toDoModel;

    public function __construct(ToDoModel $toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $data = $request->getParam('name');
        $result = $this->toDoModel->addToDo($data);
        if($result){
            return $response->withStatus(200)->withHeader('Location', '/');
        } else {
            return $response->withJson(["success" => "false", 200]);
        }
    }
}
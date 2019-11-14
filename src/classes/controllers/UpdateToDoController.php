<?php

namespace ToDoApp\controllers;

use ToDoApp\models\ToDoModel;

class UpdateToDoController
{
    private $toDoModel;

    public function __construct(ToDoModel $toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $id = $request->getParam('id');
        $name = $request->getParam('name');
        $result = $this->toDoModel->updateToDo($id, $name);
        if($result){
            return $response->withStatus(200)->withHeader('Location', '/');
        } else {
            return $response->withJson(["success" => "false", 200]);
        }
    }
}
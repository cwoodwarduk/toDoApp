<?php

namespace ToDoApp\controllers;

use ToDoApp\models\ToDoModel;

class SetToDoCompletedController
{
    private $toDoModel;

    public function __construct(ToDoModel $toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $id = $request->getParam('id');
        $result = $this->toDoModel->completeToDo($id);
        if($result){
            return $response->withStatus(200)->withHeader('Location', '/');
        } else {
            return $response->withJson(["success" => "false", 200]);
        }
    }
}
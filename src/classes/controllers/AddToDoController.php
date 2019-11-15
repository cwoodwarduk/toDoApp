<?php

namespace ToDoApp\controllers;

use http\Env\Response;
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
            return $response->withRedirect('/');
        } else {
            return $response->withJson(["success" => "false", 200]);
        }
    }
}
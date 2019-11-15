<?php

namespace ToDoApp\controllers;

use Slim\Http\Response;
use ToDoApp\models\ToDoModel;

class DeleteToDoController
{
    private $toDoModel;

    public function __construct(ToDoModel $toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $id = $request->getParam('id');
        $result = $this->toDoModel->deleteToDo($id);
        if($result){
            return $response->withRedirect('/');
        } else {
            return $response->withJson(["success" => "false", 200]);
        }
    }
}
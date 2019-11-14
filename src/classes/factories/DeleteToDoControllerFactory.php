<?php

namespace ToDoApp\factories;

use ToDoApp\controllers\DeleteToDoController;
use Psr\Container\ContainerInterface;

class DeleteToDoControllerFactory
{
    public function __invoke(ContainerInterface $container) : DeleteToDoController
    {
        $toDoModel = $container->get('ToDoModel');
        return new DeleteToDoController($toDoModel);
    }
}
<?php

namespace ToDoApp\factories;

use ToDoApp\controllers\SetToDoCompletedController;
use Psr\Container\ContainerInterface;
use ToDoApp\controllers\UpdateToDoController;

class UpdateToDoControllerFactory
{
    public function __invoke(ContainerInterface $container) : UpdateToDoController
    {
        $toDoModel = $container->get('ToDoModel');
        return new UpdateToDoController($toDoModel);
    }
}
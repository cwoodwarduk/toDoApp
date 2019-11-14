<?php

namespace ToDoApp\factories;

use ToDoApp\controllers\AddToDoController;
use Psr\Container\ContainerInterface;

class AddToDoControllerFactory
{
    public function __invoke(ContainerInterface $container) : AddToDoController
    {
        $toDoModel = $container->get('ToDoModel');
        return new AddToDoController($toDoModel);
    }
}
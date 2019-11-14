<?php

namespace ToDoApp\factories;

use ToDoApp\controllers\SetToDoCompletedController;
use Psr\Container\ContainerInterface;

class SetToDoCompletedControllerFactory
{
    public function __invoke(ContainerInterface $container) : SetToDoCompletedController
    {
        $toDoModel = $container->get('ToDoModel');
        return new SetToDoCompletedController($toDoModel);
    }
}
<?php

namespace ToDoApp\factories;

use ToDoApp\controllers\GetAllToDosController;
use Psr\Container\ContainerInterface;

class GetAllToDosControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $toDoModel = $container->get('ToDoModel');
        $renderer = $container->get('renderer');
        return new GetAllToDosController($renderer, $toDoModel);
    }
}
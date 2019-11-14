<?php

namespace ToDoApp\factories;

use ToDoApp\models\ToDoModel;
use Psr\Container\ContainerInterface;

class ToDoModelFactory
{
    public function __invoke(ContainerInterface $container) : ToDoModel
    {
        $db = $container->get('dbConnection');
        return new ToDoModel($db);
    }
}
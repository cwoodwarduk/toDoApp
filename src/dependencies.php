<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

    //db
    $container['dbConnection'] = function($c){
        $settings = $c->get('settings')['db'];
        $db = new \PDO($settings['host'].$settings['dbName'], $settings['userName'], $settings['password']);
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    };

    $container['ToDoModel'] = new ToDoApp\factories\ToDoModelFactory();
    $container['GetAllToDosController'] = new ToDoApp\factories\GetAllToDosControllerFactory();
    $container['AddToDosController'] = new ToDoApp\factories\AddToDoControllerFactory();
};

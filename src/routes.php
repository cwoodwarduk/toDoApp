<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

//    $app->get('/', function (Request $request, Response $response, array $args) use ($container) {
//        // Sample log message
//        $container->get('logger')->info("Slim-Skeleton '/' route");
//
//        // Render index view
//        return $container->get('renderer')->render($response, 'index.phtml', $args);
//    });

    $app->get('/', 'GetAllToDosController');
    $app->post('/add', 'AddToDosController');
    $app->post('/completed', 'SetToDoCompletedController');
    $app->post('/delete', 'DeleteToDoController');
    $app->post('/update', 'UpdateToDoController');
};

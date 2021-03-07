<?php

use Bramus\Router\Router;


$router = new Router();

$router->get('/', function () {
    require_once ('app/view/homepage.php');
});

$router->get('/test', function () {
    require_once ('app/view/test.php');
});

$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo '404, route not found!';
});

$router->run();
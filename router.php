<?php

use Bramus\Router\Router;


$router = new Router();
//подключаем главную страницу
$router->get('/', function () {
    require_once('assets/view/homepage.php');
});

//тестовая страница, для проверки url
$router->get('/test', function () {
    require_once('assets/view/test.php');
});

//404
$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo '404, route not found!';
});

$router->run();
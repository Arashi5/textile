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

//тестовая страница, для проверки url
$router->get('/team/', function () {
    require_once('assets/view/team.php');
});

//тестовая страница, для проверки url
$router->get('/team/(\d+)', function () {
    require_once('assets/view/player.php');
});

//404
$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo '404, route not found!';
});

$router->run();
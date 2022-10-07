<?php
    require_once __DIR__ . '/vendor/autoload.php';
    use app\core\Application;
    use app\core\Router;

    // planing out first
    $app = new Application;

    $app->router->get('/', function() {
        echo 'hello';
    });

    $app->run();
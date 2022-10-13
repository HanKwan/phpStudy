<?php
    require_once __DIR__ .'/../vendor/autoload.php';
    use app\core\Application;       // App != app  :(((

    // planing out first
    $app = new Application();

    $app->router->get('/', function() {
        return 'hello';
    });

    $app->run();
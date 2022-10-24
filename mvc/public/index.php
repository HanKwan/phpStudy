<?php
    require_once __DIR__ .'/../vendor/autoload.php';
    use app\core\Application;       // App isnt the same as app  :(((

    // planing out first
    $app = new Application(dirname(__DIR__));

    $app->router->get('/', 'home');

    $app->run();
<?php

    // planing out first
    $app = new Application;

    $app->router->get('/', function() {
        echo 'hello';
    });

    $app->run();
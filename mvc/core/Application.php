<?php
    namespace app\core;
   
   class Application {

    public Router $router;

    public function __construct() {
        $router = new Router();
    }

   }
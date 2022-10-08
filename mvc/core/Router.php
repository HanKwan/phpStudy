<?php
    namespace app\core;

    class Router {
        // assoc arr for methods
        public Request $request;
        protected $routes = [];

        public function __construct()
        {
            $this->request = new Request();
        }

        public function get($path, $callback) {
            $this->routes['get'] = $callback;
        }

        // filter out the path
        public function resolve() {
            var_dump($_SERVER);
            // $this->request->getPath();
            // $this->request->getMethod();
        }
    }
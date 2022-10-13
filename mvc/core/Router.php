<?php
    namespace app\core;

    class Router {
        public Request $request;
        protected $routes = [];         // assoc arr for methods

        public function __construct()
        {
            $this->request = new Request();
        }

        public function get($path, $callback) {
            $this->routes['get'][$path] = $callback;
        }

        // filter out the path
        public function resolve() {
            $path = $this->request->getPath();
            $method = $this->request->getMethod();
            $callback = $this->routes[$method][$path];
            
            // if the path doesnt found
            if ($callback === false) {
                return 'Not found';
            }

            // join router and views
            if (is_string($callback)) {
                return $this->venderView($callback);
            }

            return call_user_func($callback);
        }

        public function venderView($view) {
            include_once __DIR__."/../views/$view.php";
        }
    }
<?php
    namespace app\core;

    class Router {
        public Request $request;
        protected $routes = [];         // assoc arr for methods

        public function __construct(Request $request)
        {
            $this->request = $request;
        }

        public function get($path, $callback) {
            $this->routes['get'][$path] = $callback;
        }

        // filter out the path
        public function resolve() {
            $path = $this->request->getPath();
            $method = $this->request->getMethod();
            $callback = $this->routes[$method][$path] ;
            var_dump($callback);
            
            // if the path doesnt found
            if ($callback === false) {
                return 'Not found';
            }

            // join router and views
            if (is_string($callback)) {
                return $this->renderView($callback);
            }

            return call_user_func($callback);
        }

        public function renderView($view) {                 // $view is callback
            $layoutContent = $this->layoutContent();
            $viewContent = $this->renderOnlyView($view);
            return str_replace('{{contact}}', $viewContent, $layoutContent);       // replacing {{home}}
        }

        // load page from layouts
        protected function layoutContent() {
            ob_start();
            include_once Application::$ROOT_DIR."/views/layouts/main.php";
            return ob_get_clean();
        }

        // load page from view by replacing
        protected function renderOnlyView($view) {
            ob_start();
            include_once Application::$ROOT_DIR."/views/$view.php";
            return ob_get_clean();
        }
    }
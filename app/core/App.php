<?php

class App
{
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    protected $controller_whitelist = ['Home'];

    public function __construct()
    {
        $url = $this->parseUrl();

        if($this->isController($url[0])) {
            $this->controller = $url[0] . 'Controller';
            unset($url[0]);
        }

        require_once 'app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if(isset($url[1])) {
            try {
                $reflection = new ReflectionMethod($this->controller, $url[1]);
                if ($reflection->isPublic()) {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            } catch (Exception $e) {}
        }
        // if there is no parameters array is defined as empty
        $this->params = $url ? array_values($url) : [];

        //takes in a controller, method and parameter and calls associated stuff
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if(isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        else {
            return ['Home'];
        }
    }

    private function isController($name) {
        return file_exists('app/controllers/' . $name . 'Controller.php');
    }
}

<?php

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        if(isset($url[0])){
            // Ubah jadi format dengan huruf besar di awal, supaya cocok nama file controller di Linux
            $controllerName = ucfirst(strtolower($url[0]));
            if(file_exists('../app/controllers/'.$controllerName.'.php')){
                $this->controller = $controllerName;
                unset($url[0]);
            }
        }

        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        //method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //params
        if(!empty($url)){
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function parseURL()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

    
        $controllerPath = dirname(__DIR__) . '/controllers/';

        // 1. Cek Controller
        if (isset($url[0])) {
            if (file_exists($controllerPath . $url[0] . '.php')) { 
                $this->controller = $url[0];
                unset($url[0]);
            }
        }

        // Panggil controller-nya pake alamat pasti
        require_once $controllerPath . $this->controller . '.php';
        $this->controller = new $this->controller;

        // 2. Cek Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // 3. Cek Params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // 4. Jalankan
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
<?php

namespace Abdel\Mvc;

class Route
{

    public $url, $controller, $method;

    public function __construct($url)
    {
        $this->url = $url;
        $this->splitUrl();
        $this->call();
    }

    public function splitUrl()
    {

        $url_array = explode("/", $this->url);

        $this->controller = ucfirst($url_array[0]) . "Controller";

        $this->method = $url_array[1];
    }

    public function call()
    {

        $controller = "Abdel\Mvc\Controllers\\" . $this->controller;

        if (class_exists($controller)) {
            $obj_controller = new $controller;

            if (method_exists($obj_controller, $this->method)) {
                call_user_func([$obj_controller, $this->method]);
            } else {
                echo "method is not exist";
            }
        } else {
            echo "controller is not exist";
        }
    }
}

<?php

namespace hakim\opp;

class Requerst
{

    public function get($key)
    {
        if (isset($_GET[$key])) {
            return $_GET[$key];
        } else {
            echo "not found";
        }
    }

    public function filter($key)
    {
        return htmlspecialchars(trim($key));
    }

    public function querystring()
    {
        return $_SERVER['QUERY_STRING'];
    }
}

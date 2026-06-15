<?php

namespace Abdel\Mvc;

class Request
{
    public function getQueryString()
    {
        return $_SERVER['QUERY_STRING'];
    }
}

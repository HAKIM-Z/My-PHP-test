<?php

require '../vendor/autoload.php';

use Abdel\Mvc\Request;
use Abdel\Mvc\Route;

$request = new Request;

$url = $request->getQueryString();

$route = new Route($url);

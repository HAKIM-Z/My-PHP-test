<?php

require 'request.php';

use hakim\opp\Requerst;

$obj1 = new Requerst;

echo $obj1->get("name");

echo "<br>";

echo $obj1->filter("   <br>                    hakim");

echo "<br>";

echo $_SERVER['QUERY_STRING'];

echo "<br>";

echo $obj1->querystring();

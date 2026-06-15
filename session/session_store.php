<?php
session_start();
$name = "hakim";
$_SESSION['name'] = $name;
echo "session created";

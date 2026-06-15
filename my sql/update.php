<?php

require 'connection.php';
$id = 3;
$age = 25;

$query = "update users set `age`='$age' where `id`=$id";

$run = mysqli_query($connection, $query);

if ($run) {
    echo "updated";
}

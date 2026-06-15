<?php

require 'connection.php';

$qurey="select * from users";

$run=mysqli_query($connection,$qurey);

$users=mysqli_fetch_all($run,MYSQLI_ASSOC);

echo "<pre>";

print_r($users);
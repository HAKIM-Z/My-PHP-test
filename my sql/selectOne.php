<?php

require 'connection.php';

$query="select * from users where `id`=1";

$run=mysqli_query($connection,$query);

$user=mysqli_fetch_assoc($run);

echo "<pre>";

print_r($user);
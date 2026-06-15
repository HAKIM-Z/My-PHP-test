<?php

require 'connection.php';

$query = "select * from users where `name` = 'kjdfkjd'";

$run = mysqli_query($connection, $query);

$num = mysqli_num_rows($run);

if ($num == 1) {
    $user = mysqli_fetch_assoc($run);
    echo "<pre>";
    print_r($user);
} elseif ($num > 1) {
    $users = mysqli_fetch_all($run, MYSQLI_ASSOC);
    echo "<pre>";
    print_r($users);
} else {
    echo "not found";
}
 
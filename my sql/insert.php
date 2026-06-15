<?php


require 'connection.php';

$name = "soso";
$email = "soso@gmail.com";
$password = "khaled2343";
$age = 58;
$gender = 'male';

$password = password_hash($password, PASSWORD_DEFAULT);

// echo md5($password);


$query = "insert into users
(`name`,`email`,`password`,`age`,`gender`)
values
('$name','$email','$password',$age,'$gender')";


$mission = mysqli_query($connection, $query);


if ($mission) {
    echo "mission completed";
}

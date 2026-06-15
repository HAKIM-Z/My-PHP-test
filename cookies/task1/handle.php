<?php
$data = [
    "email" => "hakim@gmail.com",
    "password" => "hakim@2001"
];
extract($_POST);
if ($email == $data["email"]) {
    if ($password == $data['password']) {
        setcookie("login", $email, time() + 20);
        header("location:welcome.php");
    } else {
        header("location:login.php");
    }
} else {
    header("location:login.php");
}

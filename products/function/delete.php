<?php

session_start();

require 'connection.php';

$id = $_GET['id'];

$query = "delete from products where `id`=$id";

$run = mysqli_query($connection, $query);

if ($run) {
    $_SESSION['success'] = "deleted successfully";
    header("location:../view.php");
}

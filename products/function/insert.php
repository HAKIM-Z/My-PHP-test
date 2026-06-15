<?php

session_start();
require 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $image = $_FILES['image'];
    $img_name = $image['name'];
    $img_tmp = $image['tmp_name'];
    $img_size = $image['size'] / (1024 * 1024);
    $img_error = $image['error'];

    $extension = pathinfo($img_name, PATHINFO_EXTENSION);
    $new_name = uniqid() . "." . $extension;


    extract($_POST);
    $errors = [];

    //image validates:

    $ext = ['png', 'jpg', 'webp'];
    if ($img_error != 0) {
        $errors['image'] = "Please select image";
    } elseif (!in_array($extension, $ext)) {
        $errors['image'] = "Please select image";
    } elseif ($img_size > 1) {
        $errors['image'] = "Please select image less that 1mb";
    }

    //name validates:

    if (empty($name)) {
        $errors['name'] = "Please enter product name";
    } elseif (strlen($name) < 3) {
        $errors['name'] = "please enter valid name";
    } elseif (is_numeric($name)) {
        $errors['name'] = "Please enter valid name";
    }

    //price validates:

    if (empty($price)) {
        $errors['price'] = "Please enter price";
    } elseif (!is_numeric($price)) {
        $errors['price'] = "please enter valid price";
    }

    //count validates:

    if (empty($count)) {
        $errors['count'] = "Please enter count";
    } elseif (!is_numeric($count)) {
        $errors['count'] = "please enter valid count";
    }

    //sale validates:

    if (empty($sale)) {
        $errors['sale'] = "Please enter sale";
    } elseif ($sale < 0 | $sale > 99) {
        $errors['sale'] = "please enter valid sale";
    }

    //category validates:
    if (empty($category)) {
        $errors['category'] = "Please enter category";
    }
    if (empty($errors)) {
        $query = "INSERT INTO `products`(`name`, `price`, `sale`, `count`, `category`, `image`)
        VALUES
        ('$name','$price','$sale','$count','$category','$new_name')";

        $run = mysqli_query($connection, $query);
        if ($run) {
            $_SESSION['success']="$name added successfully";
            move_uploaded_file($img_tmp, "../images/$new_name");
            header("location:../view.php");
        }
    } else {
        $_SESSION['errors'] = $errors;
        header("location:../add.php");
    }
} else {
    header("location:../add.php");
}

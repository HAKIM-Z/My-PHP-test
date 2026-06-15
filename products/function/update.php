<?php
session_start();
require 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_GET['id'];
    extract($_POST);
    $errors = [];

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
    } elseif ($sale < 0 || $sale > 99) {
        $errors['sale'] = "please enter valid sale";
    }

    //category validates:
    if (empty($category)) {
        $errors['category'] = "Please enter category";
    }
    //images validates:
    if ($_FILES['image']['error'] == 0) {
        $image = $_FILES['image'];
        $img_name = $image['name'];
        $img_tmp = $image['tmp_name'];
        $img_size = $image['size'] / (1024 * 1024);
        $img_error = $image['error'];
        $extension = pathinfo($img_name, PATHINFO_EXTENSION);

        $ext = ['png', 'jpg', 'webp'];
        if (!in_array($extension, $ext)) {
            $errors['image'] = "Please select image";
        } elseif ($img_size > 1) {
            $errors['image'] = "Please select image less that 1mb";
        } else {
            $img = true;
        }
    }
    if (empty($errors)) {

        if (isset($img)) {
            $new_name = uniqid() . "." . $extension;
            move_uploaded_file($img_tmp, "../images/$new_name");

            $query = "UPDATE `products` SET
                `name`='$name',`price`='$price',`sale`='$sale',`count`='$count',
                `category`='$category',`image`='$new_name' WHERE `id` = $id";

            $run = mysqli_query($connection, $query);

            if ($run) {
                $_SESSION['success'] = "$name editied successfully";
                header("location:../view.php");
            }
        } else {
            $query = "UPDATE `products` SET
                `name`='$name',`price`='$price',`sale`='$sale',`count`='$count',
                `category`='$category' WHERE `id` = $id";

            $run = mysqli_query($connection, $query);

            if ($run) {
                $_SESSION['success'] = "$name editied successfully";
                header("location:../view.php");
            }
        }
    } else {
        $_SESSION['errors'] = $errors;
        header("location:../edit.php?id=$id");
    }
} else {
    header("location:../view.php");
}

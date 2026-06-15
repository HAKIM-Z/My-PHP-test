<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
    $name = trim($name);
    $email = trim($email);
    $errors = [];
    //name validates:
    if (empty($name)) {
        $errors['name'] = 'Please enter your name';
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $errors['name'] = 'Please enter valid name';
    } elseif (strlen($name) < 3) {
        $errors['name'] = 'Please enter valid name';
    }
    //email validates:
    if (empty($email)) {
        $errors['email'] = 'Please enter your email';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter valid email';
    } elseif (strlen($email) < 3) {
        $errors['email'] = 'Please enter valid email';
    }
    //password validates:
    if (empty($password)) {
        $errors['password'] = 'Please enter your password';
    } elseif (strlen($password) < 8) {
        $errors['password'] = 'Please enter valid password';
    }
    //age validates:
    if (empty($age)) {
        $errors['age'] = 'Please enter your age';
    } elseif (!is_numeric($age)) {
        $errors['age'] = 'Please enter valid age';
    } elseif ($age < 18 || $age > 60) {
        $errors['age'] = 'Please enter valid age';
    }
    //gender validates:
    if (empty($gender)) {
        $errors['gender'] = 'Please enter your gender';
    } elseif ($gender != "male" && $gender != "female") {
        $errors['gender'] = 'Please enter valid gender';
    }
    if (empty($errors)) {
        header("location:welcome.php");
    } else {
        header("location:form.php");
        $_SESSION['errors'] = $errors;
    }
} else {
    header("location:form.php");
}

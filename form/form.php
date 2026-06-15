<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // if (!empty($_SESSION['errors'])) {
    //     foreach ($_SESSION['errors'] as $key => $value) {
    //         echo $value, "<br>";
    //     }
    // }
    // unset($_SESSION['errors']);
    ?>
    <form action="handle.php" method="post">
        <?php
        if (isset($_SESSION['errors']['name'])) {
            echo $_SESSION['errors']['name'];
        }
        ?>
        <input type="text" name="name">
        <hr>
        <?php
        if (isset($_SESSION['errors']['password'])) {
            echo $_SESSION['errors']['password'];
        }
        ?>
        <input type="text" name="password">
        <hr>
        <?php
        if (isset($_SESSION['errors']['email'])) {
            echo $_SESSION['errors']['email'];
        }
        ?>
        <input type="text" name="email">
        <hr>
        <?php
        if (isset($_SESSION['errors']['age'])) {
            echo $_SESSION['errors']['age'];
        }
        ?>
        <input type="text" name="age">
        <?php
        unset($_SESSION['errors']);
        ?>
        <select name="gender" id="">
            <option value="">enter you gender</option>
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <button>confirm</button>
    </form>
</body>

</html>
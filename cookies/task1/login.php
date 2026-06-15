<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if(isset($_COOKIE['email'])){
    header("location:welcome.php");
}
?>
<body>
    <form action="handle.php" method="post">
        <input type="text" name="email">
        <input type="text" name="password">
        <button>login</button>
    </form>
</body>
</html>
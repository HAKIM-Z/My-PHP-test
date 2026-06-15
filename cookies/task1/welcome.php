<?php
if (isset($_COOKIE['login'])) {
    echo "<h1>"."welcome ". $_COOKIE['login']."</h1>";
} else {
    header("location:login.php");
}
?>
<a href="logout.php">logout</a>
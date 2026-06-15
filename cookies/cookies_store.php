<?php
$name = "hakim";
setcookie("name", $name, time() + 60 * 60);
?>
<a href="cookies_read.php">read</a>
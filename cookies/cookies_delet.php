<?php
setcookie("name", null, time() - 60);
header("location:cookies_read.php");
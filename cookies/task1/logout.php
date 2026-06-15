<?php
setcookie("login", null, time() - 3);
header("location:login.php");
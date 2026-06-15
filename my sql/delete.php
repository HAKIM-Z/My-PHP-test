<?php

require 'connection.php';

$id=37;

$qurey="delete from users where `id` = $id ";

$run=mysqli_query($connection,$qurey);

if($run){
    echo "deleted";
}
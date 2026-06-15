<?php

namespace Abdel\Mvc;

class View
{
    public static function redirect($file_name, $data)
    {
        $full_path = "C:/xampp/htdocs/My PHP test/MVC/Views/" . $file_name;
        include "$full_path";
    }
}

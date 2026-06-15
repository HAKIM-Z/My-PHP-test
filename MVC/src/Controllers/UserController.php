<?php

namespace Abdel\Mvc\Controllers;

use Abdel\Mvc\Models\User;
use Abdel\Mvc\View;

class UserController
{

    public function all()
    {
        $obj_user = new User;
        $users = $obj_user->selectAll();
        View::redirect('welcome.php', $users);
    }
}

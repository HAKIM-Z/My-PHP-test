<?php

namespace Abdel\Mvc\Models;

use Override;

class User extends Model
{
    #[Override]
    public function setTableName()
    {
        $this->table = 'users';
    }
}

<?php

namespace Abdel\Mvc\Models;

abstract class Model
{

    public $connection, $table;

    public function __construct()
    {
        $this->connection = mysqli_connect("localhost", "root", "", "function2");
        $this->setTableName();
    }

    public abstract function setTableName();

    public function selectAll()
    {

        $query = "select * from $this->table";
        $run = mysqli_query($this->connection, $query);
        return mysqli_fetch_all($run, MYSQLI_ASSOC);
    }
}

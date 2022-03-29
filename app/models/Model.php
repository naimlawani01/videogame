<?php

namespace App\models;

use App\Database;

abstract class Model
{
    protected $db;
    protected $table;
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function all(){
        $stmt = $this->db->getPDO()->query("SELECT * FROM {$this->table}");
        $class= get_called_class();
        return $stmt->fetchAll(\PDO::FETCH_CLASS);

    }

}
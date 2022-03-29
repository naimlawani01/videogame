<?php

namespace App\controllers;

use App\Database;

abstract class Controller
{
    protected $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    /**
     * @return Database
     */
    protected function getDb(): Database
    {
        return $this->db;
    }

    protected function view(string $path, array $params = null){
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require  VIEWS . $path . '.php';
        if($params){
            $params = extract($params);
        }
        $content = ob_get_clean();

        require  VIEWS. 'layout.php';
    }
}
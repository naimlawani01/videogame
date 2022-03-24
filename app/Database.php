<?php
namespace App;

use PDO;

Class Database{

    private $host;
    private $dbname;
    private $dbuser;
    private $dbpwd;
    private $pdo;
    public function __construct( $dbname, $host = 'localhost' , $dbuser= 'root', $dbpwd= '')
    {
        $this->host= $host;
        $this->dbname= $dbname;
        $this->dbuser= $dbuser;
        $this->dbpwd= $dbpwd;
    }
    public function getPDO()
    {
        if($this->pdo == null)
        {
            $pdo = new PDO('mysql:host=localhost;dbname=videogame', 'root', '');
            var_dump($pdo);
            $this->pdo = $pdo;
        }
        return $this->pdo;

    }
    public function querryInsert(){

    }
    public function querrySelect(){

    }

}
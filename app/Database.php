<?php
namespace App;

use PDO;

Class Database{

    private $host;
    private $dbname;
    private $dbuser;
    private $dbpwd;
    public function __construct( $dbname, $host = 'localhost' , $dbuser= 'root', $dbpwd= '')
    {
        $this->host= $host;
        $this->dbname= $dbname;
        $this->dbuser= $dbuser;
        $this->dbpwd= $dbpwd;
    }
    public function getPDO()
    { 
        $pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->dbuser, $this->dbpwd );
        $this->pdo = $pdo;
        return $this->pdo;

    }

}
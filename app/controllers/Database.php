<?php
namespace App;

use PDO;

Class Database{

    private $host = 'localhost' ;
    private $dbname= 'naimimranelawani';
    private $dbuser= 'root';
    private $dbpwd= '';
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
            $pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->dbuser, $this->dbpwd );
            $this->pdo = $pdo;
        }
        return $this->pdo;

    }

}
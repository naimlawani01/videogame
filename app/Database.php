<?php
/**
* La classe Database permet d'initialiser la base de donnée.
*
* @author NAIM
*/
namespace App;


use PDO;

Class Database{

    private $host;
    private $dbname;
    private $dbuser;
    private $dbpwd;
    private $pdo;
    public function __construct( $dbname, $host = '127.0.0.1' , $dbuser= 'root', $dbpwd= 'videogame')
    {
        $this->host= $host;
        $this->dbname= $dbname;
        $this->dbuser= $dbuser;
        $this->dbpwd= $dbpwd;
    }
    public function getPDO()
    {

        return $this->pdo?? $this->pdo = new PDO("mysql:host=127.0.0.1;dbname={$this->dbname}", $this->dbuser, $this->dbpwd);

    }


}
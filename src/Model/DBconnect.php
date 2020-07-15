<?php
namespace Study\Model;
use PDO;

class DBconnect {

    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn='mysql:host=localhost;dbname=library_manager;charset=utf8';
        $this->username='leducmanh';
        $this->password='leducmanh';
    }
    function connectDB(){
        $connectDB = NULL;
        $connectDB = new PDO($this->dsn,$this->username,$this->password);
        return $connectDB;
    }
}


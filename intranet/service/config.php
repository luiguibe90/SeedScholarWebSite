<?php
class schoolar

{
    public $server ="127.0.0.1";
    public $username = "root";
    public $password = "12345678";
    public $dbname = "seedSchoolarDB"
    function __construct()
    {
        $this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
        if($this->connectdb->connect_error)
        {
            die("connection failed");
        }
    }
    public function hackme()
    {
        $this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
        return $this->connectdb;
    }








}
?>



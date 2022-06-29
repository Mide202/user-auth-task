<?php
class Dbh 
{
    private $host = "localhost";
    private $name = "root";
    private $password = "";
    private $dbname = "zuriphp";

    protected function connect()
    {
        $conn = mysqli_connect($this->host,$this->name, $this->password,$this->dbname);
        if (!$conn) {
            die("connection failed");
        }
        return $conn;
    }
}




<?php


class MyDb
{
    private $dbname = "final_year_project";

    private $hostname = "localhost";
    private $username = "root";
    private $password = "";

    private $conn;

    public function __construct()
    {
        // Statements here run every time
        // an instance of the class
        // is created.

    }

    public function connect()
    {
        $this->conn = mysqli_connect($this->hostname, $this->username, $this->password,$this->dbname);

        if (!$this->conn) {
            return false;
        }
        
        return $this->conn;
    }

    public function close()
    {
        mysqli_close($this->conn);
    }

}

// $var = new MyDb();
// $var->connect();

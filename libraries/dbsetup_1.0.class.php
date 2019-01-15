<?php

class DBS {
 public static $dbName = '';
 public static $user = '';
 public static $password = '';
 public static $host = 'localhost';

 public $conn = null;

 public function connect() {
  $conn = new mysqli($this->host, $this->user, $this->password, $this->dbName);
  // Check connection
  if ($conn->connect_error) {
   throw new Exception("Connection failed: " . $conn->connect_error);
  }
  $this->conn = $conn;
  return $conn;
 }

 public function createTables() {
  // sql to create table
  $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

  if ($conn->query($sql) === TRUE) {
   echo "Table MyGuests created successfully";
  } else {
   echo "Error creating table: " . $conn->error;
  }

 }

}

?>
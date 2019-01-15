<?php

include "database.php";

class Insert {

 private $conn;

 public function __construct() {

  $var = new MyDb();
  $this->conn = $var->connect();
 }

 public function createAccount() {
   echo "create account called";



 }

 public function checkAccountExists(){
    return true;
 }

 public function updatePollutionData(){
   $carbon = $_GET['carbon'];
   $sulphur = $_GET['sulphur'];


   $queryToSave = "INSERT INTO table (id, name, age) VALUES(1, \"A\", 19) ON DUPLICATE KEY UPDATE    
   name=\"A\", age=19";


   if(mysqli_query($this->conn,$queryToSave)){
      
   }

 }

}

$var = new Insert();
$var->createAccount();
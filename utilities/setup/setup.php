<?php

/* 
Quick test url

http://localhost/education/final_year_project/utilities/setup/setup.php

curl http://vehicleinfo.orgfree.com/intel/utilities/setup/setup.php

*/

include "../../api/database.php";
//include "../../api/data.php";


$user = DBInfo::USERNAME;
$pass = DBInfo::PASSWORD;
$host = DBInfo::HOST;
$dbname = DBInfo::DBNAME;
$sql_file = fopen('schema.sql', 'r');
$sql = fread($sql_file, filesize('schema.sql'));
$conn = new PDO("mysql:host=" . $host . ";dbname=" . $dbname , $user, $pass);
$conn->exec($sql);

?>
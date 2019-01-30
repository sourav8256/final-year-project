<?php

require realpath(__DIR__."/..").'/libraries/meekrodb.2.3.class.php';
require realpath(__DIR__).'/data.php';


DB::$user = DBInfo::USERNAME;
DB::$password = DBInfo::PASSWORD;
DB::$dbName = DBInfo::DBNAME;


?>
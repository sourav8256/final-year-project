<?php

//echo "dir name is ".realpath(__DIR__."/../..");

date_default_timezone_set("Asia/kolkata");
//echo time("hh:mm:ss");
echo date("h:i:s a d/m/Y");

include_once "database.php";


function incrementTicketCounter(){
    $timestamp = time();
    DB::queryRaw("UPDATE account_data SET ticketCount=ticketCount+1,`status`=\"bad\",`lastCheckDate`=$timestamp WHERE `drivingLicenceNumber`=%s","drno");
 }
 

 incrementTicketCounter();


?>
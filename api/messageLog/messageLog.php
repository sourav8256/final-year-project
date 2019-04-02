<?php


/* 

http://localhost/education/final_year_project/api/messageLog/messageLog.php?drivingLicenceNumber=drivinglicensenum232

curl "http://localhost/education/final_year_project/api/messageLog/messageLog.php?drivingLicenceNumber=drivinglicensenum232"

*/



include_once "../database.php";

try {

    $drivingLicenceNumber = $_GET['drivingLicenceNumber'];

    $query = DB::query("SELECT * FROM message_data");
    foreach($query as $row){
        $result['messageLog'][] = $row;
    }

} catch(Exception $e) {
    $result['result'] = 0;
    $result['message'] = $e->getMessage();
}

if($query){
    $result['result'] = 1;
    $result['message'] = "values saved successfully";
} else {
    
    $result['result'] = 0;
    $result['message'] = "values not saved there has been an error.";
}

echo json_encode($result,JSON_PRETTY_PRINT);



?>


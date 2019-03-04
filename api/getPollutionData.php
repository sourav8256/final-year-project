<?php

/* 
Quick test url

curl http://localhost/education/final_year_project/api/getPollutionData.php?chassisNumber=755845

curl http://vehicleinfo.orgfree.com/intel/api/getPollutionData.php?chassisNumber=755845

*/

error_reporting(E_ERROR | E_PARSE);

include_once "database.php";
include_once "data.php";

try {

    $chassisNumberKey = DBInfo::POLLUTION_FIELDS[0];
    $chassisNumber = $_GET[$chassisNumberKey];
    $chassisNumber = $_GET['chassisNumber'];
    $query = DB::query("SELECT * FROM poll_data WHERE $chassisNumberKey=$chassisNumber");
    foreach($query as $row){
        $result['data'][] = $row;
    }
    //$result['data'] = $query;

} catch(Exception $e) {
    $result['result'] = 0;
    $result['message'] = $e->getMessage();
}

if($query){
    $result['result'] = 1;
    $result['message'] = "values fetched successfully";
} else {
    $result['result'] = 0;
    //$result['message'] = "values cannot be fetched there has been an error.";
}

echo json_encode($result);

?>
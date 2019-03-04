<?php

date_default_timezone_set("Asia/kolkata");

include_once "database.php";
include_once "data.php";

/* $_GET['username'] = "new username";
$_GET['vid'] = 25;
$_GET['carbon'] = 45;
$_GET['sulphur'] = 69;
$_GET['serial'] = 15; */


/* 
Quick test url

curl "http://localhost/education/final_year_project/api/savePollutionData.php?chassisNumber=755845&co=2234&co2=2234&hydro-carbons=4500&fine-charges=3000&due-payment-date=234234234&total-amount=3000&ticket=TRQ3322142323"

curl "http://vehicleinfo.orgfree.com/intel/api/savePollutionData.php?chassisNumber=755845&co=2234&co2=2234&hydro-carbons=4500&fine-charges=3000&due-payment-date=234234234&total-amount=3000&ticket=TRQ3322142323"


*/

//$result['vid'] = $_GET['vid'];

try {

 $_GET['date'] = date("d/m/Y");
 $_GET['time'] = date("h:i:s a");  

 $pollutionData = array();      
 foreach (DBInfo::POLLUTION_FIELDS as $field) {
    if($_GET[$field]!=null){ 
    $pollutionData[$field] = $_GET[$field];
    } else {
      $pollutionData[$field] = "NULL";
    }
 }


 $query = DB::insert('poll_data', $pollutionData);

//  $query = DB::insertUpdate('account_data', array(
//   'serial' => !empty($_GET['serial']) ? $_GET['serial'] : null,
//   'username' => $_GET['username'],
//   'vid' => $_GET['vid'],
//   'carbon' => $_GET['carbon'],
//   'sulphur' => $_GET['sulphur'],
//  ));

} catch (Exception $e) {
 $result['result'] = 0;
 $result['message'] = $e->getMessage();
}

if ($query) {
 $result['result'] = 1;
 $result['message'] = "values saved successfully";
} else {

 $result['result'] = 0;
 $result['message'] = "Error: 101-Query did not run values not fetched there has been an error.";
}

echo json_encode($result);

?>
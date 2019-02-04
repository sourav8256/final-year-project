<?php

include_once "database.php";
include_once "data.php";

/* $_GET['username'] = "new username";
$_GET['vid'] = 25;
$_GET['carbon'] = 45;
$_GET['sulphur'] = 69;
$_GET['serial'] = 15; */


/* 
Quick test url

http://localhost/education/final_year_project/api/saveAccountData.php?chassisNumber=212&modelCategory=2234&registrationNumber=2234&subscriptionDate=2234&subRenewalDate=2234&duePayment=2234&status=good

curl "http://vehicleinfo.orgfree.com/intel/api/saveAccountData.php?chassisNumber=212&modelCategory=2234&registrationNumber=2234&subscriptionDate=2234&subRenewalDate=2234&duePayment=2234&status=good"

*/

//$result['vid'] = $_GET['vid'];

try {

 $pollutionData = array();      
 foreach (DBInfo::ACCOUNT_FIELDS as $field) { 
    $pollutionData[$field] = $_GET[$field];
 }


 $query = DB::insertUpdate('account_data', $pollutionData);

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
 $result['message'] = "values fetched successfully";
} else {

 $result['result'] = 0;
 $result['message'] = "Error: 101-Query did not run values not fetched there has been an error.";
}

echo json_encode($result);

?>
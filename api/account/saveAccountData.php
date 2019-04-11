<?php

include_once "../database.php";
include_once "../data.php";

/* $_GET['username'] = "new username";
$_GET['vid'] = 25;
$_GET['carbon'] = 45;
$_GET['sulphur'] = 69;
$_GET['serial'] = 15; */


/* 
Quick test url

local


http://localhost/education/final_year_project/api/account/saveAccountData.php?chassisNumber=212&registrationNumber=2234&modelCategory=2234&drivingLicenceNumber=drivinglicensenum232&password=passwordffhe45&mobileNumber=78237483923&emergencyNumber=7987798798&email=djflsfjd@jfd.cslj&bloodGroup=B&address=address&engineType=CAR&subscriptionDate=2234&subscriptionDate=323432&subRenewalDate=2234&duePayment=2234&status=good

curl "http://localhost/education/final_year_project/api/account/saveAccountData.php?chassisNumber=212&registrationNumber=2234&modelCategory=fsd&drivingLicenceNumber=drivinglicensenum232&password=passwordffhe45&mobileNumber=78237483923&emergencyNumber=7987798798&email=djflsfjd@jfd.cslj&bloodGroup=B&address=address&engineType=CAR&subscriptionDate=2234&subscriptionDate=323432&subRenewalDate=2234&duePayment=2234&status=good"

http://localhost/education/final_year_project/api/saveAccountData.php?chassisNumber=212&modelCategory=2234&registrationNumber=2234&subscriptionDate=2234&subRenewalDate=2234&duePayment=2234&status=good

curl "http://localhost/education/final_year_project/api/saveAccountData.php?chassisNumber=212&modelCategory=2234&registrationNumber=2234&subscriptionDate=2234&subRenewalDate=2234&duePayment=2234&status=good"

server

curl "http://vehicleinfo.orgfree.com/intel/api/saveAccountData.php?chassisNumber=212&modelCategory=2234&registrationNumber=2234&subscriptionDate=2234&subRenewalDate=2234&duePayment=2234&status=good"

*/

//$result['vid'] = $_GET['vid'];

try {

 $accountData = array();      
 foreach (DBInfo::ACCOUNT_FIELDS as $field) {
    
    if($field == "subscriptionDate"){
      $accountData[$field] = time();
    } else if($field == "subRenewalDate"){
      $accountData[$field] = time();
    } else if($field == "status"){
      $accountData[$field] = "GOOD";
    } else if($field == "ticketCount"){
      $accountData[$field] = 0;
    } else if($field == "lastCheckDate"){
      $accountData[$field] = time();
   } else if($field == "duePayment"){
      $accountData[$field] = 0;
   } else {
    $accountData[$field] = $_GET[$field];
   }
 }


 $query = DB::insertUpdate('account_data', $accountData);

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
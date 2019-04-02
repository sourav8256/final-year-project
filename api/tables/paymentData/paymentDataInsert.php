<?php

include_once "../../database.php";
include_once "../../data.php";

/* 
Quick test url

local



http://localhost/education/final_year_project/api/tables/paymentData/paymentDataInsert.php?drivingLicenceNumber=drivinglicensenum232&timeAndDate=43534534&totalAmount=435435&paymentMethod=342443&paymentReferenceNo=242werwr&dueBalance=24324&ticketId=23423

curl "http://localhost/education/final_year_project/api/saveAccountData.php?chassisNumber=212&modelCategory=2234&registrationNumber=2234&subscriptionDate=2234&subRenewalDate=2234&duePayment=2234&status=good"


curl "http://vehicleinfo.orgfree.com/intel/api/saveAccountData.php?chassisNumber=212&modelCategory=2234&registrationNumber=2234&subscriptionDate=2234&subRenewalDate=2234&duePayment=2234&status=good"

*/


try {

 $data = array();      
 foreach (DBInfo::PAYMENT_FIELDS as $field) { 
    $data[$field] = $_GET[$field];
 }


 $query = DB::insertUpdate('payment_data', $data);

} catch (Exception $e) {
 $result['result'] = 0;
 $result['message'] = $e->getMessage();
}

if ($query) {
 $result['result'] = 1;
 $result['message'] = "values inserted successfully";
} else {

 $result['result'] = 0;
 $result['message'] = "Error: 101-Query did not run values not inserted there has been an error.";
}

echo json_encode($result);

?>
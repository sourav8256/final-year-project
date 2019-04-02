<?php



/* 

http://localhost/education/final_year_project/api/account/authenticate.php?drivingLicenceNumber=drivinglicensenum232&password=passwordffhe45

curl "http://localhost/education/final_year_project/api/account/authenticate.php?drivingLicenceNumber=drivinglicensenum232&password=passwordffhe45"

*/


/* 

result codes:

    111 = user authenticated withour any problem
    101 = user could not be authenticated because user does not exist

*/

include_once "../database.php";

$drivingLicenceNumber = $_GET['drivingLicenceNumber'];
$password = $_GET['password'];


$account = DB::queryFirstRow("SELECT * FROM account_data WHERE drivingLicenceNumber=%s AND password=%s", $drivingLicenceNumber,$password);

if(sizeof($account) > 1){
    $result['result'] = true;
    $result['resultCode'] = 111;
    $result['message'] = "Authenticated successfully user exists";
} else {
    $result['result'] = false;
    $result['responseCode'] = 101;
    $result['message'] = "Not authenticated user doesn't exist";
}


echo json_encode($result);

?>
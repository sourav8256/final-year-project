<?php

/* $xml = file_get_contents("http://127.0.0.1:8080/edsa-fyp-api/api/account/getAccountData.php");

$arr = json_decode($xml,true);

print_r($arr["data"]);



echo

<<<CQ

<tr>
<td>
  <a
    class="modal-trigger"
    data-chassis-number="555545"
    onclick="updateModalPollutionData(this)"
    href="#customer-report-modal"
    >555545</a
  >
</td>
<td>Truck2</td>
<td>TR01-N-05</td>
<td>21/11/2017</td>
<td>21/11/2018</td>
<td>Rs. 3000</td>
<td>Very Bad</td>
</tr>
CQ;
 */



/* 
$jsonData = file_get_contents("http://127.0.0.1:8080/edsa-fyp-api/api/account/getAccountData.php");

$arr = json_decode($jsonData,true);

for($i = 0;$i<sizeof($arr['data']);$i++){


    $data = $arr['data'][$i];


  echo

 '
 <tr>
 <td>
   <a
     class="modal-trigger"
     data-chassis-number="555545"
     onclick="updateModalPollutionData(this)"
     href="#customer-report-modal"
     >'.$data["drivingLicenceNumber"].'</a
   >
 </td>
 <td>'.$data["modelCategory"].'</td>
 <td>'.$data["registrationNumber"].'</td>
 <td>'.$data["subscriptionDate"].'</td>
 <td>'.$data["subRenewalDate"].'</td>
 <td>'.$data["duePayment"].'</td>
 <td>'.$data["status"].'</td>
 </tr>
';
 
}

 */

/* $drivingLicenceNumber = $_GET['drivingLicenceNumber'];



$json = file_get_contents("http://127.0.0.1:8080/edsa-fyp-api/api/customerReport/customerReport.php?drivingLicenceNumber=".$drivingLicenceNumber);
echo $json; */





$json = file_get_contents("http://127.0.0.1:8080/edsa-fyp-api/api/messageLog/messageLog.php");
$array = json_decode($json, true);

print_r($array);

for ($i = 0; $i < sizeof($array["criticalPollutionLevel"]); $i++) {

$row = $array["criticalPollutionLevel"][$i];

echo

  '

  <tr>
  <td>' . $row['timeAndDate'] . '</td>
  <td>' . $row['co'] . '</td>
  <td>' . $row['co2'] . '</td>
  <td>' . $row['hydro-carbons'] . '</td>
  <td>' . $row['fine-charges'] . '</td>
  <td>' . $row['due-payment-date'] . '</td>
  <td>' . $row['total-amount'] . '</td>
  <td>' . $row['customerContact'] . '</td>
  <td>' . $row['registrationNumber'] . '</td>
  </tr>


  ';

}




?>
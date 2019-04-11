<?php

$drivingLicenceNumber = $_GET['drivingLicenceNumber'];

$json = file_get_contents("http://127.0.0.1:8080/edsa-fyp-api/api/customerReport/customerReport.php?drivingLicenceNumber=" . $drivingLicenceNumber);
$array = json_decode($json, true);
//print_r($array);

?>



<h4>Customer Report</h4>

<div class="divider"></div>

<table>
  <thead>
    <tr>
      <th>
        Name
      </th>
      <td>
        <?php echo $array['customerInfo'][0]['customerName'] ?>
      </td>
      <th>
        Chassis Number
      </th>
      <td>
      <?php echo $array['customerInfo'][0]['chassisNumber'] ?>
      </td>
      <th>
        Registration Number
      </th>
      <td>
      <?php echo $array['customerInfo'][0]['registrationNumber'] ?>
      </td>
    </tr>

    <tr>
      <th>
        Customer Contact
      </th>
      <td>
      <?php echo $array['customerInfo'][0]['mobileNumber'] ?>
      </td>
      <th>
        Address
      </th>
      <td>
      <?php echo $array['customerInfo'][0]['address'] ?>
      </td>
      <th>
        Driving Licence No.
      </th>
      <td>
      <?php echo $array['customerInfo'][0]['drivingLicenceNumber'] ?>
      </td>
    </tr>

    <tr>
      <th>
        Mobile No.
      </th>
      <td>
      <?php echo $array['customerInfo'][0]['mobileNumber'] ?>
      </td>
      <th>
        Emergency No.
      </th>
      <td>
      <?php echo $array['customerInfo'][0]['emergencyNumber'] ?>
      </td>
      <th>
        Email
      </th>
      <td>
      <?php echo $array['customerInfo'][0]['email'] ?>
      </td>
    </tr>

    <tr>
      <th>
        Blood Group
      </th>
      <td>
      <?php echo $array['customerInfo'][0]['bloodGroup'] ?>
      </td>
      <th>
        Subscription Date and Time
      </th>
      <td>
      <?php echo $array['customerInfo'][0]['subscriptionDate'] ?>
      </td>
      <th>
        Subscription Renewal Date
      </th>
      <td>
      <?php echo $array['customerInfo'][0]['subRenewalDate'] ?>
      </td>
    </tr>

    <tr>
      <th>
        Due Payment
      </th>
      <td>
      <?php echo $array['customerInfo'][0]['duePayment'] ?>
      </td>
      <th></th>
      <td></td>
      <th></th>
      <td></td>
    </tr>
  </thead>
</table>



<div class="divider"></div>

<div class="section">
  <h6 class="flow-text">Pollution Parameters</h6>
  <div class="divider"></div>

  <table id="pollution-table" class="striped">
    <thead>
      <tr>
        <th>Time and Date</th>
        <th>CO(%)</th>
        <th>CO2(%)</th>
        <th>HC-<br />carbons(ppm)</th>
        <th>Fine Charges</th>
        <th>Due <br />Payment Date</th>
        <th>Total Amount</th>
        <th>Ticket Id</th>
      </tr>






    </thead>





    <?php

for ($i = 0; $i < sizeof($array['pollutionParameters']); $i++) {

 echo

  '
    <tr>
        <td>' . $array['pollutionParameters'][$i]['timeAndDate'] . '</td>
        <td>' . $array['pollutionParameters'][$i]['co'] . '</td>
        <td>' . $array['pollutionParameters'][$i]['co2'] . '</td>
        <td>' . $array['pollutionParameters'][$i]['hydro-carbons'] . '</td>
        <td>' . $array['pollutionParameters'][$i]['fine-charges'] . '</td>
        <td>' . $array['pollutionParameters'][$i]['due-payment-date'] . '</td>
        <td>' . $array['pollutionParameters'][$i]['total-amount'] . '</td>
        <td>' . $array['pollutionParameters'][$i]['ticket'] . '</td>
    </tr>

    ';

}

?>


  </table>
</div>

<div class="divider"></div>

<div class="section">
  <h6 class="flow-text">Payment History</h6>
  <div class="divider"></div>

  <table class="striped">
    <thead>
      <tr>
        <th>Time and Date</th>
        <th>Total Amount</th>
        <th>Payment Method</th>
        <th>Payment Reference No.</th>
        <th>Due Balance</th>
        <th>Ticket Id</th>
      </tr>
    </thead>

    <tr>
      <td>22/05/2018</td>
      <td>Rs 1000</td>
      <td>IMPS</td>
      <td>RNC44232355/SUB</td>
      <td>Rs. 500</td>
      <td>TRQ3322142323</td>
    </tr>


    <?php

for ($i = 0; $i < sizeof($array['paymentHistory']); $i++) {

 echo

  '
    <tr>
        <td>' . $array['paymentHistory'][$i]['timeAndDate'] . '</td>
        <td>' . $array['paymentHistory'][$i]['totalAmount'] . '</td>
        <td>' . $array['paymentHistory'][$i]['paymentMethod'] . '</td>
        <td>' . $array['paymentHistory'][$i]['paymentReferenceNo'] . '</td>
        <td>' . $array['paymentHistory'][$i]['dueBalance'] . '</td>
        <td>' . $array['paymentHistory'][$i]['ticketId'] . '</td>
    </tr>

    ';

}

?>



  </table>
</div>

<div class="divider"></div>


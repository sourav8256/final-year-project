<?php

class DBInfo {

   const HOST = "";
   const USERNAME = "root";
   const PASSWORD = "";
   const DBNAME = "final_year_project";

/*   const HOST = "localhost";
const USERNAME = "1374370";
const PASSWORD = "finalYearPass";
const DBNAME = "1374370";  */

   const ACCOUNT_FIELDS = array(
      'customerName',
      'chassisNumber',
      'registrationNumber',
      'modelCategory',
      'drivingLicenceNumber',
      'password',
      'mobileNumber',
      'emergencyNumber',
      'email',
      'bloodGroup',
      'address',
      'engineType',
      'subscriptionDate',
      'subRenewalDate',
      'duePayment',
      'status',
      'ticketCount',
      'lastCheckDate'
   );

   /*

   http://localhost/education/final_year_project/api/saveAccountData.php?chassisNumber=212&registrationNumber=2234&modelCategory=2234&drivingLicenceNumber=drivinglicensenum232&password=passwordffhe45&mobileNumber=78237483923&emergencyNumber=7987798798&email=djflsfjd@jfd.cslj&bloodGroup=B&address=address&engineType=CAR&subscriptionDate=2234&subscriptionDate=323432&subRenewalDate=2234&duePayment=2234&status=good

    */

   const POLLUTION_FIELDS = array(
      'chassisNumber',
      'time',
      'date',
      'co',
      'co2',
      'hydro-carbons',
      'fine-charges',
      'due-payment-date',
      'total-amount',
      'ticket',
   );

   const MESSAGE_FIELDS = array(
      'ticketId',
      'registrationNumber',
      'timeAndDate',
      'customerName',
      'dueAmount',
      'pollutionStatus',
   );

   const PAYMENT_FIELDS = array(
      'drivingLicenceNumber',
      'timeAndDate',
      'totalAmount',
      'paymentMethod',
      'paymentReferenceNo',
      'dueBalance',
      'ticketId',
   );

   /* defining model caetgory static data */

   const MODEL_CATEGORY = array(
      'car' => array(
         'bs3' => array(
            'co' => 6788,
            'hco' => 988,
            'co2' => 7866
         ),
         'bs4' => array(
            'co' => 6788,
            'hco' => 988,
            'co2' => 7866
         ),
      ),
      'truck' => array(
         'bs3' => array(
            'co' => 6788,
            'hco' => 988,
            'co2' => 7866
         ),
         'bs4' => array(
            'co' => 6788,
            'hco' => 988,
            'co2' => 7866
         ),
      ),
      'scooty' => array(
         'bs3' => array(
            'co' => 6788,
            'hco' => 988,
            'co2' => 7866
         ),
         'bs4' => array(
            'co' => 6788,
            'hco' => 988,
            'co2' => 7866
         ),
      ),
      'bus' => array(
         'bs3' => array(
            'co' => 6788,
            'hco' => 988,
            'co2' => 7866
         ),
         'bs4' => array(
            'co' => 6788,
            'hco' => 988,
            'co2' => 7866
         ),
      ),
      'bike' => array(
         'bs3' => array(
            'co' => 6788,
            'hco' => 988,
            'co2' => 7866
         ),
         'bs4' => array(
            'co' => 6788,
            'hco' => 988,
            'co2' => 7866
         ),
      ),
   );

}

?>
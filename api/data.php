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
  'chassisNumber',
  'modelCategory',
  'registrationNumber',
  'subscriptionDate',
  'subRenewalDate',
  'duePayment',
  'status',
 );

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

}

?>
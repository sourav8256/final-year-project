<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="libraries/materialize.min.css" />

    <link href="libraries/google-fonts/google-fonts.css" rel="stylesheet" />

    <script src="libraries/jquery-1.9.1.js"></script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pollution Analyser</title>
  </head>



  <?php

$envDebug = true;

?>



  <body>
    <nav>
      <div class="nav-wrapper lime darken-1">
        <img
          class="col s2"
          src="logo4.png"
          style="width: 125px; height: 62px;"
          alt=""
          srcset=""
        />
        <a href="#" class="brand-logo"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="sass.html">Last updated : Nov 19 2018 2:04:54 PM</a></li>
          <li>
            <a href="badges.html"
              ><i class="material-icons">settings_applications</i></a
            >
          </li>
          <li><a href="collapsible.html">Admin</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <!-- Tabs -->

      <br />
      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s3">
              <a class="teal-text text-lighten-1 active" href="#tab1"
                ><i class="material-icons teal-text text-lighten-1"
                  >insert_chart</i
                >Admin Dashboard</a
              >
            </li>
            <li class="tab col s3">
              <a class="teal-text text-lighten-1" href="#tab-alerts"
                ><i class="material-icons teal-text text-lighten-1"
                  >notifications</i
                >Alerts</a
              >
            </li>
            <li class="tab col s3">
              <a class="teal-text text-lighten-1" href="#tab-reports"
                ><i class="material-icons teal-text text-lighten-1"
                  >assignment</i
                >Reports</a
              >
            </li>
            <li class="tab col s3">
              <a class="teal-text text-lighten-1" href="#tab-message-log"
                ><i class="material-icons teal-text text-lighten-1"
                  >insert_chart</i
                >Message Log</a
              >
            </li>
          </ul>
        </div>
      </div>

      <div id="tab1">
        <button
          data-target="add-new-modal"
          class="btn waves-effect waves-light modal-trigger"
          type="submit"
          name="action"
        >
          Add New
          <i class="material-icons right">add_circle_outline</i>
        </button>

        <!-- Modal Structure -->
        <div id="add-new-modal" class="modal">
          <div class="modal-content">
            <h4>Register Customer Vehicle</h4>

            <div class="divider"></div>

            <div class="row">
              <!-- row starts -->

              <div class="col s6">
                <div class="input-field">
                  <input
                    placeholder="Chassis Number"
                    id="chassisNumber"
                    type="text"
                    class="validate"
                  />
                  <label for="chassisNumber">Chassis Number</label>
                </div>
              </div>

              <div class="col s6">
                <div class="input-field">
                  <input
                    placeholder="Reginstration Number"
                    id="registrationNumber"
                    type="text"
                    class="validate"
                  />
                  <label for="registrationNumber">Reginstration Number</label>
                </div>
              </div>

              <div class="col s6">
                <div class="input-field">
                  <input
                    placeholder="Model Category"
                    id="modelCategory"
                    type="text"
                    class="validate"
                  />
                  <label for="modelCategory">Model Category</label>
                </div>
              </div>

              <div class="col s6">
                <div class="input-field">
                  <input
                    placeholder="Customer Name"
                    id="customerName"
                    type="text"
                    class="validate"
                  />
                  <label for="customerName">Customer Name</label>
                </div>
              </div>

              <div class="col s6">
                <div class="input-field">
                  <input
                    placeholder="Driving License Number"
                    id="drivingLicenceNumber"
                    type="text"
                    class="validate"
                  />
                  <label for="drivingLicenseNumber"
                    >Driving License Number</label
                  >
                </div>
              </div>

              <div class="col s6">
                <div class="input-field">
                  <input
                    placeholder="Mobile Number"
                    id="mobileNumber"
                    type="text"
                    class="validate"
                  />
                  <label for="mobileNumber">Mobile Number</label>
                </div>
              </div>

              <div class="col s6">
                <div class="input-field">
                  <input
                    placeholder="Emergency Number"
                    id="emergencyNumber"
                    type="text"
                    class="validate"
                  />
                  <label for="emergencyNumber">Emergency Number</label>
                </div>
              </div>

              <div class="col s6">
                <div class="input-field">
                  <input
                    placeholder="Email"
                    id="email"
                    type="text"
                    class="validate"
                  />
                  <label for="email">Email</label>
                </div>
              </div>

              <div class="col s6">
                <div class="input-field">
                  <input
                    placeholder="Password"
                    id="password"
                    type="text"
                    class="validate"
                  />
                  <label for="password">Password</label>
                </div>
              </div>

              <div class="col s6">
                <div class="input-field">
                  <input
                    placeholder="Blood Group"
                    id="bloodGroup"
                    type="text"
                    class="validate"
                  />
                  <label for="bloodGroup">Blood Group</label>
                </div>
              </div>

              <div class="col s6">
                <div class="input-field">
                  <input
                    placeholder="Address"
                    id="address"
                    type="text"
                    class="validate"
                  />
                  <label for="address">Address</label>
                </div>
              </div>

              <div class="col s6">
                <div class="input-field">
                  <input
                    placeholder="Engine Type"
                    id="engineType"
                    type="text"
                    class="validate"
                  />
                  <label for="engineType">Engine Type</label>
                </div>
              </div>

              <!-- Row ends -->
            </div>

            <button
              data-target="add-new-modal"
              class="btn waves-effect waves-light modal-trigger"
              type="submit"
              onclick="submitNewRegistrationForm()"
              name="action"
            >
              Submit
              <i class="material-icons right">add_circle_outline</i>
            </button>
          </div>

          <div class="divider"></div>

          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat"
              >Close</a
            >
          </div>
        </div>

        <br />
        <br />

        <div class="row">
          <div class="col s3">
            <div class="input-field">
              <select>
                <option value="" disabled selected>- ALL -</option>
                <option value="1">Car</option>
                <option value="2">Bus</option>
                <option value="3">Truck</option>
                <option value="4">Motorcycle</option>
              </select>
              <label>Model Category</label>
            </div>
          </div>

          <div class="col s3">
            <div class="input-field">
              <input
                placeholder="Placeholder"
                id="regd_name"
                type="text"
                class="validate"
              />
              <label for="regd_name">Regd No.</label>
            </div>
          </div>

          <div class="col s3">
            <div class="input-field">
              <input
                placeholder="Placeholder"
                id="from_date"
                type="text"
                class="validate"
              />
              <label for="from_date">From Date</label>
            </div>
          </div>

          <div class="col s3">
            <div class="input-field">
              <input
                placeholder="Placeholder"
                id="to_date"
                type="text"
                class="validate"
              />
              <label for="to_date">To Date</label>
            </div>
          </div>

          <div class="col s3">
            <div class="input-field">
              <input
                placeholder="Chassis number"
                id="chassis_no"
                type="text"
                class="validate"
              />
              <label for="chassis_no">Chassis No.</label>
            </div>
          </div>

          <div class="col s3">
            <div class="input-field">
              <select>
                <option value="" disabled selected>- ALL -</option>
                <option value="1">Good</option>
                <option value="2">Bad</option>
              </select>
              <label>Status</label>
            </div>
          </div>

          <div class="col s3">
            <a class="waves-effect waves-light btn-small"
              ><i class="material-icons left">search</i>Find</a
            >
          </div>
        </div>

        <table class="striped">
          <thead>
            <tr>
              <th>Driving Licence <br> Number</th>
              <th>Model Category</th>
              <th>Registration no.</th>
              <th>Subscription Date.</th>
              <th>Sub. Renewal Date.</th>
              <th>Due Payment</th>
              <th>
                <div class="input-field col s1">
                  <select>
                    <option value="" disabled selected>- ALL -</option>
                    <option value="1">Good</option>
                    <option value="2">Bad</option>
                    <option value="3">Very Bad</option>
                  </select>
                  <label>Status</label>
                </div>
              </th>
            </tr>
          </thead>

          <tbody>


            <?php

$jsonData = file_get_contents("http://127.0.0.1:8080/edsa-fyp-api/api/account/getAccountData.php");

$arr = json_decode($jsonData, true);

for ($i = 0; $i < sizeof($arr['data']); $i++) {

 $data = $arr['data'][$i];

 echo

  '
 <tr>
 <td>
   <a
     class="modal-trigger"
     data-chassis-number="' . $data["drivingLicenceNumber"] . '"
     onclick="updateModalPollutionData(this)"
     href="#customer-report-modal"
     >' . $data["drivingLicenceNumber"] . '</a
   >
 </td>
 <td>' . $data["modelCategory"] . '</td>
 <td>' . $data["registrationNumber"] . '</td>
 <td>' . $data["subscriptionDate"] . '</td>
 <td>' . $data["subRenewalDate"] . '</td>
 <td>' . $data["duePayment"] . '</td>
 <td>' . $data["status"] . '</td>
 </tr>
';

}

?>


          </tbody>
        </table>
      </div>

      <div id="tab-alerts" class="col s12">


        <h4>Critical Pollution Level</h4>
        <table class="striped">
          <thead>
            <tr>
              <th>Time and Date</th>
              <th>CO</th>
              <th>CO2</th>
              <th>
                Other <br />
                Hydro Carbons
              </th>
              <th>Fine Charges</th>
              <th>Due Date</th>
              <th>Total Amount</th>
              <th>Custormer Contact</th>
              <th>Reg. No.</th>
            </tr>
          </thead>

          <tbody>

            <?php

$json = file_get_contents("http://127.0.0.1:8080/edsa-fyp-api/api/alerts/alerts.php");
$array = json_decode($json, true);

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
                <td>' . $row['mobileNumber'] . '</td>
                <td>' . $row['registrationNumber'] . '</td>
                </tr>


                ';

}

?>


          </tbody>
        </table>

      </div>
      <div id="tab-reports" class="col s12">
        <div class="row">
          <div class="col s3">
            <div class="input-field">
              <input
                placeholder="Placeholder"
                id="from_date"
                type="text"
                class="validate"
              />
              <label for="from_date">From Date</label>
            </div>
          </div>

          <div class="col s3">
            <div class="input-field">
              <input
                placeholder="Placeholder"
                id="to_date"
                type="text"
                class="validate"
              />
              <label for="to_date">To Date</label>
            </div>
          </div>

          <div class="col s3">
            <div class="input-field">
              <select>
                <option value="" disabled selected>Vehicle Invoice</option>
                <option value="1">Good</option>
                <option value="2">Bad</option>
                <option value="3">Very Bad</option>
              </select>
              <label>Type</label>
            </div>
          </div>

          <div class="col s3">
            <a class="waves-effect waves-light btn-small"
              ><i class="material-icons left">search</i>View</a
            >
          </div>
        </div>
      </div>
      <div id="tab-message-log" class="col s12">
        <table class="striped">
          <thead>
            <tr>
              <th>Ticket Id</th>
              <th>Reg. Number</th>
              <th>Time & Date</th>
              <th>Customer Name</th>
              <th>Customer Contact</th>
              <th>Due Amount</th>
              <th>Pollution Status</th>
            </tr>
          </thead>

          <tbody>



            <?php

              $json = file_get_contents("http://127.0.0.1:8080/edsa-fyp-api/api/messageLog/messageLog.php");
              $array = json_decode($json, true);

              //print_r($array);

              for ($i = 0; $i < sizeof($array["messageLog"]); $i++) {

              $row = $array["messageLog"][$i];

              echo

                '

                <tr>
                <td>' . $row['ticketId'] . '</td>
                <td>' . $row['registrationNumber'] . '</td>
                <td>' . $row['timeAndDate'] . '</td>
                <td>' . $row['customerName'] . '</td>
                <td>' . $row['customerContact'] . '</td>
                <td>' . $row['dueAmount'] . '</td>
                <td>' . $row['pollutionStatus'] . '</td>
                </tr>


                ';

              }

            ?>



          </tbody>
        </table>
      </div>

      <!-- Modal Structure -->
      <!-- search term #modal -->
      <div id="customer-report-modal" class="modal">
        <div class="modal-content">

        <div id="customer-report-in-modal">
        </div>

        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat"
            >Close</a
          >
        </div>
      </div>
      <!-- #modal ends -->
    </div>

    <br />

    <footer class="page-footer lime darken-1">
      <div class="footer-copyright">
        <div class="container">
          © 2018 Copyright
          <a class="grey-text text-lighten-4 right" href="#!"
            >Best Viewed in Firefox and Chrome</a
          >
        </div>
      </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="index.js"></script>
    <script src="controllers/registration.js"></script>
    <script src="controllers/customerReport.js"></script>
  </body>
</html>

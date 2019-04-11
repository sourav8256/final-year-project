
function updateModalPollutionData(elem) {


    this.fetchPollutionData  = function (drivingLicenceNumber, callback){

        var req = new XMLHttpRequest();
        req.onreadystatechange = function () {
    
            if (this.readyState == 4 && this.status == 200) {
    
                console.log(req.response);
                

                callback(req.response);


            }
    
        }
        req.open("GET", "views/customerReport.php?drivingLicenceNumber="+drivingLicenceNumber, true)
        req.send();
    
    }


    this.fetchPollutionData(elem.getAttribute("data-chassis-number"),(data)=>{
        var customerReportInModal = document.getElementById("customer-report-in-modal");
        customerReportInModal.innerHTML = data;
    })

}







function updateModalPollutionData2(elem) {
    var pollutionTable = document.getElementById('pollution-table');
    pollutionTable.innerHTML =
        `
    <thead>
          <tr>
            <th>Time</th>
            <th>Date</th>
            <th>CO(%)</th>
            <th>CO2(%)</th>
            <th>HC-<br>carbons(ppm)</th>
            <th>Fine Charges</th>
            <th>Due <br>Payment Date</th>
            <th>Total Amount</th>
            <th>Ticket Id</th>
          </tr>
        </thead>
    `;


    chassisNumber = elem.getAttribute("data-chassis-number");
    console.log("chassis number is " + chassisNumber);
    this.fetchPollutionData(chassisNumber, (data) => {
        console.log(data);
        json = JSON.parse(data);

        json.data.forEach(element => {
            pollutionTable.appendChild(createPollutionRow(element));
        });
    });


    this.fetchPollutionData  = function (chassisNumber, callback){

        var req = new XMLHttpRequest();
        req.onreadystatechange = function () {
    
            if (this.readyState == 4 && this.status == 200) {
    
                console.log(req.response);
                
                callback(req.response);
            }
    
        }
        req.open("GET", apiRoot+"getPollutionData.php?chassisNumber=" +
            chassisNumber, true)
        req.send();
    
    }

}


function fetchPollutionData() {



}

function createPollutionRow(object) {

    var tableRow = document.createElement('tr');
    var array = Object.keys(object);



    for (var i = 1; i < array.length; i++) {
        var tableColumn = document.createElement("td");
        tableColumn.innerText = object[array[i]];
        //console.log(array[i]);
        tableRow.appendChild(tableColumn);
    }


    return tableRow;
}

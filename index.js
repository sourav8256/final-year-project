var apiRoot = "http://localhost/education/final_year_project/api/";
//var apiRoot = "http://vehicleinfo.orgfree.com/intel/api/";


document.addEventListener('DOMContentLoaded', function () {
    options = {
        "one": "two",
        "two": "three"
    };
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
    //var instance = M.FormSelect.getInstance(elem);

    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);

    var el = document.querySelectorAll('.tabs');
    var instance = M.Tabs.init(el, options);

});

document.addEventListener('DOMContentLoaded', function () {

});



window.onload = function () {
    //updateModalPollutionData();
}


function updateModalPollutionData(elem) {
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
    fetchPollutionData(chassisNumber, (data) => {


        console.log(data);
        json = JSON.parse(data);

        json.data.forEach(element => {
            pollutionTable.appendChild(createPollutionRow(element));
        });
    });

}


function fetchPollutionData(chassisNumber, callback) {


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
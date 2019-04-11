//var apiRoot = "http://localhost/education/final_year_project/api/";
//var apiRoot = "http://vehicleinfo.orgfree.com/intel/api/";
var apiRoot = "http://127.0.0.1:8080/edsa-fyp-api/api/";


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









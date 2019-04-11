
/* Registration */


var ACCOUNT_FIELDS = [
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
];



function submitNewRegistrationForm(){


    console.log('submit form called!');
    
    var url = apiRoot+"/account/saveAccountData.php";
    var paramJson = {};

    for(var i=0;i<ACCOUNT_FIELDS.length;i++){
        paramJson[ACCOUNT_FIELDS[i]] = $('#'+ACCOUNT_FIELDS[i]).val();
    }

    var getting = $.get(url,paramJson);

    getting.done(function(data){
        $('#add-new-modal').modal('close');
        console.log(data);
    });

}
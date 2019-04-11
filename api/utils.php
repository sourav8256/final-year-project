<?php


    function generateTicket($ticketType,$registrationNumber,$licenceNumber){
        
        $regSub = substr($registrationNumber,-3);
        $licenceSub = substr($licenceNumber,-2);
        $dateTime = date("hdmY");

        $ticketId = $ticketType.$regSub.$licenceSub.$dateTime;
        return $ticketId;

    }



    $dateTime = date("hdmY");
    echo "".$dateTime;


?>
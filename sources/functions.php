<?php

class functions {
    
function convertDate($dates) {

    if (strlen($dates['date']) > 10 ) {

        $dates = explode(" au ", $dates['date']);

        $date = "Du {$dates[0]} au {$dates[1]}";

    } else {
        $jma = explode("-", $dates['date']);
        $date = "Le ".$jma[2]."-".$jma[1]."-".$jma[0];
    }
}

}
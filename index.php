<?php

define( 'ABSPATH', __DIR__ . '/' );

error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );

//--------------------------------
// Import GLOBAL FUNCTIONS !
//--------------------------------
require_once ABSPATH . "sources/functions.php";
$func = new functions();

//--------------------------------
// Import GLOBAL HTML !
//--------------------------------
require_once ABSPATH . "skin/skin_global.php";
$html_global = new skin_global();






//--------------------------------
// Import Page HTML !
//--------------------------------
require_once ABSPATH . "skin/skin_home.php";
$html_page = new skin_home();


echo $html_global->header();


include_once ABSPATH . "data/events.inc.php";

foreach ($events as $event) {

    if (strlen($event['date']) > 10 ) {

        $dates = explode(" au ", $event['date']);

        $date = "Du {$dates[0]} au {$dates[1]}";

    } else {
        $jma = explode("-", $event['date']);
        $date = "Le ".$jma[2]."-".$jma[1]."-".$jma[0];
    }

    $time = strlen($event['time']) > 5 ? "de ".str_replace("-", "à", $event['time']) : $time = "à ".$event['time'];

    $event["date"] = $date;
    $event["time"] = $time;

    echo $html_page->eventsListe($event);
}


echo $html_global->footer();
<?php 

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

    echo $this_html->event_row($event);
}
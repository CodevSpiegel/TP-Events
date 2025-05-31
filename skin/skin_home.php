<?php

class skin_home {


function eventsListe($array, $date, $time) 
{
return <<<HTML
    <div class="event-block">
        <img src="./assets/img/{$array['image']}" alt="">
        <div class="right-content">
            <h2>{$array['title']}</h2>
            <div class="date">$date $time</div>
            <div class="lieux">{$array['location']}</div>
            <p class="desc">{$array['description']}</p>
        </div>
    </div>

HTML;
}



}


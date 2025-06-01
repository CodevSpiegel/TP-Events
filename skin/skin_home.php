<?php

class skin_home {


function eventsListe( $datas = array() ) 
{
return <<<HTML
    <div class="event-block">
        <img src="./assets/img/{$datas['image']}" alt="">
        <div class="right-content">
            <h2>{$datas['title']}</h2>
            <div class="date">{$datas['date']} {$datas['time']}</div>
            <div class="lieux">{$datas['location']}</div>
            <p class="desc">{$datas['description']}</p>
        </div>
    </div>

HTML;
}



}


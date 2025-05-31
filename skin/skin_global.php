<?php

class skin_global {


function header() 
{
return <<<HTML
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Summer Events</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/styles/main.css">
</head>
<body>
    <header>
        <h1>TP Summer Events</h1>
    </header>
    <main>

HTML;
}


function footer() 
{
return <<<HTML
    </main>
    <footer></footer>
</body>
</html>

HTML;
}



}
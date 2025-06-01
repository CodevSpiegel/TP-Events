<?php

define( 'ABSPATH', __DIR__ . '/' );

error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );

require_once ABSPATH . "config.php";

//--------------------------------
// Import GLOBAL FUNCTIONS !
//--------------------------------
require_once ABSPATH . "sources/functions.php";
$func = new functions();

//--------------------------------
// Import GLOBAL HTML !
//--------------------------------
require_once ABSPATH . "skin/skin_global.php";
$global_html = new skin_global();

//--------------------------------
// Import THIS HTML PAGE !
//--------------------------------
require_once ABSPATH . "skin/skin_home.php";
$this_html = new skin_home();


//--------------------------------
// RETURN
//--------------------------------
echo $global_html->header();

require_once ABSPATH . "sources/home.php";

echo $global_html->footer();
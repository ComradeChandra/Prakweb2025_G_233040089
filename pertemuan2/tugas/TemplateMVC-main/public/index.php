<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ( !session_id() ) {
    session_start();
}


define('ROOT', dirname(__DIR__)); 


require_once ROOT . '/app/init.php';

$app = new App;
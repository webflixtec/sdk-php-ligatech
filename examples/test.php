<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/../vendor/autoload.php";

$apiEvent = new \Ligatech\Event();

$apiEvent->setClientId('');

try{
    $apiEventResponse = $apiEvent->search();

    Ligatech\Helper\LigatechHelper::dump($apiEventResponse);
} catch (Telcom\Exceptions\TelcomException $ex) {

    Ligatech\Helper\LigatechHelper::dump($ex);
    
}


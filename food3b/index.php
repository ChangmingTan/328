<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once("vendor/autoload.php");
require_once("model/data-layer.php");

//Start a session AFTER requiring autoload.php
session_start();

//To check if there's uncleaned session to cause error
//var_dump($_SESSION);

//Instantiate my classes
$f3 = Base::instance();
$validator = new Validate();
$controller = new Controller($f3, $validator);
$db = new Database();

//Default route
$f3->route('GET /', function () {
    $GLOBALS['controller']->home();
});

//Order route
$f3->route('GET|POST /order', function () {
    $GLOBALS['controller']->order();
});

//Order2 route
$f3->route('GET|POST /order2', function () {
    $GLOBALS['controller']->order2();
});

//Summary route
$f3->route('GET /summary', function () {
    $GLOBALS['controller']->summary();
});

//Display route
$f3->route('GET /display', function () {
    $GLOBALS['controller']->display();
});

//Run F3
$f3->run();
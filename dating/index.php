<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once("vendor/autoload.php");
require_once("model/data-layer.php");

//Start a session AFTER requiring autoload.php
session_start();

//Instantiate my classes
$f3 = Base::instance();
$validator = new Validate();
$controller = new Controller($f3, $validator);

//Default route
$f3->route('GET /', function () {
    $GLOBALS['controller']->home();
});

//Personal Information route
$f3->route('GET|POST /personal-information', function ($f3) {
    $GLOBALS['controller']->pinfo();
});

//Profile route
$f3->route('GET|POST /profile', function ($f3) {
    $GLOBALS['controller']->profile();
});

//Interests route
$f3->route('GET|POST /interests', function ($f3) {
    $GLOBALS['controller']->interests();
});

//Summary route
$f3->route('GET /summary', function () {
    $GLOBALS['controller']->summary();
});

//Run fat free
$f3->run();
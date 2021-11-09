<?php

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');
require_once("model/data-layer.php");

// Start a session AFTER requiring autoload.php
session_start();

//To check if there's uncleaned session to cause error
//var_dump($_SESSION);

// Instantiate the F3 Base Class
$f3 = Base::instance();
$validator = new Validate();
$controller = new Controller($f3, $validator);
$db = new Database();

// Default route
$f3->route('GET /', function () {
    $GLOBALS['controller']->home();
});

// Basic information page
$f3->route('GET|POST /information', function () {
    $GLOBALS['controller']->information();
});

// Basic information about car page
$f3->route('GET|POST /car', function () {
    $GLOBALS['controller']->car();
});

// Information about exterior of car
$f3->route('GET|POST /exterior', function () {
    $GLOBALS['controller']->exterior();
});

// Information about interior of car
$f3->route('GET|POST /interior', function () {
    $GLOBALS['controller']->interior();
});

// Information about suv
$f3->route('GET|POST /suv', function () {
    $GLOBALS['controller']->suv();
});

// Confirm page of the final product
$f3->route('GET /summary', function () {
    $GLOBALS['controller']->summary();
});

// Display page of the final product
$f3->route('GET /display', function () {
    $GLOBALS['controller']->display();
});

// Run F3
$f3->run();

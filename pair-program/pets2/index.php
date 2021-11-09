<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//Require the autoload file
require_once("vendor/autoload.php");

//Instantiate the F3 Base class
$f3 = Base::instance();

//Default route
$f3->route('GET /', function () {
    //echo "<h1>My Pets</h1>";

    $view = new Template();
    echo $view->render('views/pet-home.html');
});

//Order route
$f3->route('GET|POST /order', function ($f3) {

    //Check if the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        var_dump($_POST);

        //Validate the data
        $colors = array('purple', 'black', 'white');
        if (empty($_POST['pet']) || !in_array($_POST['color'], $colors)) {
            echo "<p>Please supply a pet type and select a color</p>";
        } //Data is invalid
        else {
            //Data is valid
            $_SESSION['pet'] = $_POST['pet'];
            $_SESSION['color'] = $_POST['color'];

            //Redirect to summary route
            $f3->reroute('summary');
            session_destroy();
        }
    }

    $view = new Template();
    echo $view->render('views/pet-order.html');

});

//Summary route
$f3->route('GET /summary', function () {
    //echo '<h1>Thank you for your order!</h1>';

    $view = new Template();
    echo $view->render('views/order-summary.html');

});

//run f3
$f3->run();

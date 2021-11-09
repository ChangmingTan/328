<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//Require the autoload file
require_once("vendor/autoload.php");
require_once("model/data-layer.php");
require_once("model/validate.php");

//Instantiate the F3 Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function () {
    $view = new Template();
    echo $view->render('views/home.html');
});

//Survey route
$f3->route('GET|POST /survey', function ($f3) {

    //If the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        var_dump($_POST);

        //Validation
        if (!validName($_POST['name'])) {

            //Set an error variable in the F3 hive
            $f3->set('errors["name"]', "Invalid name");
        }

        $options = $_POST['option'];
        if (isset($options)) {
            foreach ($options as $option) {

                $f3->set('selectedOption', $option);

                if (!validOptions($option)) {

                    //Set an error variable in the F3 hive
                    $f3->set('errors["option"]', "Invalid option");
                }
            }
        } else {
            //Set an error variable in the F3 hive
            $f3->set('errors["option"]', "Invalid option");
        }

        //Data is valid
        if (empty($f3->get('errors'))) {

            //Store the data in the session array
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['option'] = $_POST['option'];

            //Redirect to Order 2 page
            $f3->reroute('summary');
        }
    }

    $f3->set('options', getOptions());
    $f3->set('name', $_POST['name']);

    $view = new Template();
    echo $view->render('views/survey.html');

});

//Summary route
$f3->route('GET /summary', function () {
    $view = new Template();
    echo $view->render('views/summary.html');

    session_destroy();
});

//Run fat free
$f3->run();
<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Instantiate the F3 Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function ($f3) {
    //echo '<h1>Week 5</h1>';

    //Create variables in the F3 hive
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Template');
    $f3->set('temp', 67);
    $f3->set('color', 'purple');
    $f3->set('radius', 2);

    //Define an array of fruits
    $f3->set('fruits', array('apple', 'orange', 'banana'));
    $f3->set('bookmarks', array('http://www.cnet.com', 'http://www.reddit.com/r/news', 'http://edition.cnn.com/sport'));

    //Define an associative array of desserts
    $f3->set('addresses', array('primary' => '1000 Apple Ln. Seattle, Wa 98999', 'secondary' => '2510 100th Court Tac, Wa 90000'));

    $f3->set('desserts', array('chocolate' => 'Chocolate Mousse', 'vanilla' => 'Vanilla Custard', 'strawberry' => 'Strawberry Shortcake'));

    //Display the template/view
    $view = new Template();
    echo $view->render('views/info.html');
});

//Run fat free
$f3->run();
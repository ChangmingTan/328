<!--Name: Changming Tan-->
<!--Date: 4/10/2020-->
<!--URL: https://ctan.greenriverdev.com/328/pair-program/cupcakes/-->
<!--This program has a form that consists with a name input and checkboxes for various cupcake options, and an Order button.
The form uses PHP to validate whether a name is provided and at least one checkbox is checked.
Additionally, it verifies the values submitted are valid and that I have not been spoofed.
It calculates the price of total order of $3.50 cost for each cupcake. -->

<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";

require("validation-functions.php");

// create a flag to track validation
$isValid = true;

// initialize all variables
$name = "";
$options = array();

if (!empty($_POST['name'])) {
    $name = trim($_POST['name']);
} else {
    echo "<h1>Name is required.</h1>";
    $isValid = false;
}

// at least one option has been selected
if (isset($_POST['options']) && sizeof($_POST['options']) >= 1) {

    // if options are valid
    if (validOptions($_POST['options'])) {
        $options = $_POST['options'];
        $optionsString = implode("</li><li>", $options);
    } // I've been spoofed!
    else {
        die("<h1>Don't hack me!</h1>");
    }
} // no options selected
else {
    $optionsString = "<h1>Choose at least one option!</h1>";
    echo $optionsString;
    $isValid = false;
}

if ($isValid) {
    // display the form data
    echo "<h1>Thank you, $name, for your order!</h1>";
    echo "<h2>Order Summary:</h2>";

    //to avoid printing an empty ul
    if (count($options) > 0) {
        echo "<ul>";
        echo "<li>" . $optionsString . "</li>";
        echo "</ul>";
    }

    $checkedArray = $_POST['options'];
    $count = count($checkedArray);
    //echo "There are ".$count." checkbox(es) are checked";
    $totalPrice = number_format(($count * 3.50), 2, ".", "");

    echo "<h3>Order Total: $totalPrice</h3>";
}

<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "Hello";

$name = "John";
$age = 23;

const TAX_RATE = 0.08;

echo '<p>' . $name . ' is ' . $age . '</p>';    //John is 23
echo "<p>$name is $age</p>";    //John is 23
echo '<p>$name is $age</p><br>';    //$name is $age

echo "<h1>Arithmetic</h1>";
echo "<b>Create two variables a and b that contain integers 5 and 2. Print the sum, difference, product, quotient, and remainder of those variables.</b><br>";
$a = 5;
$b = 2;
echo 'two numbers: ' . $a . ', ' . $b . '<br>';
echo 'sum: ' . ($a + $b) . '<br>';
echo 'difference: ' . ($a - $b) . '<br>';
echo 'product: ' . ($a * $b) . '<br>';
echo 'quotient: ' . ($a / $b) . '<br>';
echo 'remainder: ' . ($a % $b) . '<br>';

echo "<h1>Decision Logic</h1>";
echo "<b>Create and assign values to two variables, a and b. If a is more than b, print “a is greater”</b><br>";
$a = 5;
$b = 2;
if ($a > $b) {
    echo 'a is greater';
}

echo "<br><br><b>Compare a and b. Print the value of the larger variable.</b><br>";
if ($a > $b) {
    echo $a;
} else {
    echo $b;
}

echo "<h1>Conditional Operator</h1>";
echo "<b>Compare a and b. Using the conditional operator, print the value of the larger variable.</b><br>";
$a = 5;
$b = 2;
echo $a > $b ? $a : $b;

echo "<h1>Switch Statement</h1>";
echo "<b>Write a switch statement that displays the quarter corresponding to an integer:  1-Fall, \v2-Winter, 3-Spring, 4-Summer. Print an error message for any other numbers.</b><br>";
$quarter = 2;
switch ($quarter) {
    case 1:
        echo 'Fall';
        break;
    case 2:
        echo 'Winter';
        break;
    case 3:
        echo 'Spring';
        break;
    case 4:
        echo 'Summer';
        break;
    default:
        echo 'Invalid';
}

echo "<h1>Logical Operators</h1>";
echo "<b>If a does not equal b, and if b is 10 or less, print “YES.”</b><br>";
$a = 5;
$b = 2;
if ($a != $b AND $b <= 10) {
    echo 'a is greater';
}

echo "<h1>For Loops</h1>";
echo "<b>Write a for loop that prints the numbers from 10 to 1, and then print “Blastoff!”</b><br>";
for ($num = 10; $num > 0; $num--) {
    echo "$num<br>";
}
echo 'Blastoff!';

echo "<h1>While Loops</h1>";
echo "<b>Write a while loop that prints the numbers from 10 to 1, and then print “Blastoff!”</b><br>";
$num = 10;
while ($num > 0) {
    echo "$num<br>";
    $num--;
}
echo 'Blastoff!';

echo "<h1>Arrays</h1>";
echo "<b>Define an array of names. Print the array using var_dump</b><br>";
$names = array('Bob', 'Sue', 'Tran');
var_dump($names);

echo "<b>Add a name to the names array</b><br>";
$names[] = 'Khan';  // if no [], it will replace the previous array

echo "<h1>Arrays & For Loops</h1>";
echo "<b>Print the array of names, one per line, using a for-loop</b><br>";
for ($i = 0; $i < sizeof($names); $i++) {
    echo $names[$i] . '<br>';
}

echo "<h1>Arrays & Foreach Loops</h1>";
echo "<b>Print the array of names using a for-each loop.</b><br>";
foreach ($names as $name) {
    echo $name . '<br>';
}

echo "<h1>Associative Arrays</h1>";
echo "<b>Define an array of three product names with their associated prices.</b><br>";
$products = array(
    'eraser' => 0.50,
    'pencil' => 1.25,
    'binder' => 3.75
);
var_dump($products);

echo "<br><br><b>Add a product and price to the products array</b><br>";
$products['highlighter'] = 1.99;
var_dump($products);

echo "<br><br><b>Print each item along with its price</b><br>";
foreach ($products as $product => $price) {
    echo "$product - $price<br>";
}

echo "<h1>Include</h1>";
echo "<b>Write a statement to include a file called header.htm</b><br>";
include 'header.htm';

echo "<h1>Redirects</h1>";
echo "<b>Write a statement to redirect to a file called 'result.php'</b><br>";
//header('location: result.php');     //must be before any html outputs including white space

echo "<h1>Functions</h1>";
echo "<b>Define a function that prints Hello. Call the function</b><br>";
function hello()
{
    echo 'Hello!';
}

hello();

echo "<h1>Function Parameters</h1>";
echo "<b>Define a function that accepts a name and prints Hello, name. Call the function</b><br>";
function hello2($name)
{
    echo "Hello, $name!";
}

hello2('Jim');

echo "<h1>Function Return Values</h1>";
echo "<b>Define a function combine that accepts a first name and last name, and returns the concatenation of the two. Call the function and print the return value.</b><br>";
function combine($fname, $lname)
{
    return $fname . ' ' . $lname;
}

echo combine('Jim', 'Lu');

echo "<h1>A Few Useful Functions</h1>";
echo "<b>Define a variable containing a name </b>";
echo "<b>Print the number of characters in the name</b>";
echo "<b>Convert the name to all uppercase</b>";
echo "<b>Convert the name to all lowercase</b>";
echo "<b>See if the name contains an apostrophe</b><br>";
$name = "McDonalds";
echo strlen($name) . '<br>';
echo strtoupper($name) . '<br>';
echo strtolower($name) . '<br>';
echo strpos($name, "'") == 0 ? "no" : "yes";

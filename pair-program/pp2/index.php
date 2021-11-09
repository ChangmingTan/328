<?php
/* Name: Changming Tan
   Date: 4/17/2020
   URL: https://ctan.greenriverdev.com/328/pair-program/pp2/index.php
*/

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
<h1>Pair Program 2</h1>
<?php
echo "<h2>Step 1:</h2>";
echo "<b>PHP Array Practice.</b>";

echo "<h2>Step 2:</h2>";
echo "<b>Define an array \$numbers, which contains 7, 9, 8, 9, 8, 8, 6. In the same PHP block, write a
function printArr() that takes an array as a parameter and prints the array, one item per
line. Call your function and pass it the \$numbers array. Test your code and then commit
your changes.</b><br><br>";

$numbers = array(7, 9, 8, 9, 8, 8, 6);

echo "<h2>Step 3:</h2>";
echo "<b>Move your print function into an include file called functions.php in the same directory.
Make sure it still works. Commit your changes. This time you will need to add two files
to the staging area, because both files have changed: functions.php and index.html. You
only need one commit and one push.</b><br><br>";

include("functions.php");


?>
</body>
</html>
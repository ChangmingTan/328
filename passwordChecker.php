<!--Password Checker

Define a constant to store a minimum password length of 6

Define a function isValidPassword that takes a password and returns true if it is valid, and false if it is not
    - A password is valid if it contains at least the minimum number of characters

Define an array of test passwords, some valid and some not

Loop through the array of test passwords, and print each one along with whether or not it is valid

Challenges:

Define an array of special characters. Modify your function so that a password is only valid if it contains at least one of the special characters.

Modify your function so that a password is only valid if it contains at least one uppercase and one lowercase letter.-->

<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

const MIN_PASSWORD = 6;

$passwords = array("abc", "abc123", "Ab!123", "abc123*");
foreach ($passwords as $password) {
    $valid = isValidPassword($password) ? "" : "NOT";
    echo "$password is $valid a valid password<br>";
}

//Rule:  length is at least 6 characters
function isValidPassword($password)
{
    $len = strlen($password);
    if ($len < MIN_PASSWORD) {
        return false;
    }
    return true;
}

/*
 * Rules:
 * Length is at least 6 characters
 * Contains a special character
 * Contains at least 1 uppercase and 1 lowercase letter
 */

function isValidPassword2($password)
{
    return checkLength($password) && specialChar($password) && containsUpperAndLower($password);
}

//Return true if password meets minimum length requirement
function checkLength($password)
{
    return strlen($password) >= MIN_PASSWORD;
}

//Return true if password contains at least one
//special character
function specialChar($password)
{
    $specialChars = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')');
    foreach ($specialChars as $char) {
        if (strpos($password, $char) != 0) {
            return true;
        }
    }
    return false;
}

//Return true if password contains at least one
//uppercase letter and at least one lowercase letter
function containsUpperAndLower($password)
{
    if (strtoupper($password) == $password) return false;
    if (strtolower($password) == $password) return false;
    return true;
}

<?php

/**
 * Class Validate
 * Contains the validation methods for my app
 * @author Changming Tan
 * @version 1.0
 */
class Validate
{
    /* Return a value indicating if name parameter is valid
       Valid name is not empty and is all alphabetic
       @param String $name
       @return boolean
    */
    function validName($name)
    {
        $name = str_replace(' ', '', $name);
        return !empty($name) && ctype_alpha($name);
    }


    /* Return a value indicating if age is valid
       Valid age is not empty and is numeric and between 18 and 118
       @param String $age
       @return boolean
    */
    function validAge($age)
    {
        $age = str_replace(' ', '', $age);
        return !empty($age) && is_numeric($age) && ($age >= 18 && $age <= 118);
    }


    /* Return a value indicating if phone number is valid
       Valid phone numbers are numbers between 0 and 9, 10 digits, with no punctuation
       @param String $phone
       @return boolean
    */
    function validPhone($phone)
    {
        $phone = str_replace(' ', '', $phone);
        return !empty($phone) && preg_match("/^\d{10}$/", $phone);
    }


    /* Return a value indicating if email is valid
       Valid emails are in a valid format
       @param String $email
       @return boolean
    */
    function validEmail($email)
    {
        $email = str_replace(' ', '', $email);
        return !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
    }


    /* Return a value indicating if indoor interest is valid
       Valid indoor interests are in a list of valid options
       @param String $indoor
       @return boolean
    */
    function validIndoor($indoor)
    {
        $indoors = getIndoor();
        return in_array($indoor, $indoors);
    }


    /* Return a value indicating if outdoor interest is valid
       Valid outdoor interests are in a list of valid options
       @param String $outdoor
       @return boolean
    */
    function validOutdoor($outdoor)
    {
        $outdoors = getOutdoor();
        return in_array($outdoor, $outdoors);
    }
}
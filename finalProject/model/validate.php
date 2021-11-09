<?php

// Validate.php

/* Return a value indicating if name parameter is valid
 * Valid names are not empty and do not contain anything except letters
 * @param String $first
 * @return boolean
 */
class Validate
{
    function validName($name)
    {
        $name = str_replace(' ', '', $name);
        return !empty($name) && ctype_alpha($name);
    }

    /* Return a value indicating if email parameter is valid
     * Valid phone numbers are numbers between 0 and 9, 10 digits, with no punctuation
     * @param int phone
     * @return boolean
     */
    function validPhone($phone)
    {
        $phone = str_replace(' ', '', $phone);
        return !empty($phone) && preg_match("/^\d{10}$/", $phone);
    }

    /* Return a value indicating if email parameter is valid
     * Valid phone is example@example.com
     * @param string email
     * @return boolean
     */
    function validEmail($email)
    {
        $email = str_replace(' ', '', $email);
        return !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /* Return a value indicating if model of bmw parameter is valid
     * @param string model
     * @return boolean
     */
    function validModel($model)
    {
        return in_array($model, getModel());
    }

    /* Return a value indicating if year parameter is valid
     * @param string year
     * @return boolean
     */
    function validYear($year)
    {
        return in_array($year, getYear());
    }

    /* Return a value indicating if drive-train parameter is valid
     * @param string drive-train
     * @return boolean
     */
    function validDriveTrain($drive)
    {
        return in_array($drive, getWheel());
    }

    /* Return a value indicating if rim size parameter is valid
     * @param string rim
     * @return boolean
     */
    function validRim($rim)
    {
        return in_array($rim, getRim());
    }

    /* Return a value indicating if to add spinners is valid
     * @param string spinner
     * @return boolean
     */
    function validSpinner($spinner)
    {
        return in_array($spinner, getSpinner());
    }

    /* Return a value indicating if color of vehicle is valid
     * @param string color
     * @return boolean
     */
    function validColor($color)
    {
        return in_array($color, getColor());
    }

    /* Return a value indicating if exhaust type is valid
     * @param string exhaust
     * @return boolean
     */
    function validExhaust($exhaust)
    {
        return in_array($exhaust, getExhaust());
    }

    /* Return a value indicating if engine type is valid
     * @param string engine
     * @return boolean
     */
    function validEngine($engine)
    {
        return in_array($engine, getEngine());
    }

    /* Return a value indicating if transmission type is valid
     * @param string transmission
     * @return boolean
     */
    function validTransmission($transmission)
    {
        return in_array($transmission, getTransmission());
    }

    /* Return a value indicating if leather type is valid
     * @param string leather
     * @return boolean
     */
    function validLeather($leather)
    {
        return in_array($leather, getLeather());
    }

    /* Return a value indicating if leather type is valid
     * @param string leather
     * @return boolean
     */
    function validSeats($seats)
    {
        return in_array($seats, getSeat());
    }

    /* Return a value indicating if leather type is valid
     * @param string leather
     * @return boolean
     */
    function validStereo($stereo)
    {
        return in_array($stereo, getStereo());
    }

    /* Return a value indicating if nav type is valid
     * @param string nav
     * @return boolean
     */
    function validNav($nav)
    {
        return in_array($nav, getNavigation());
    }

    /* Return a value indicating if heads up display type is valid
     * @param string head
     * @return boolean
     */
    function validHead($head)
    {
        return in_array($head, getHeadsUp());
    }

    /* Return a value indicating if number of wheels is valid
     * @param string wheels
     * @return boolean
     */
    function validNumWheels($wheels)
    {
        return in_array($wheels, getNumWheels());
    }
}



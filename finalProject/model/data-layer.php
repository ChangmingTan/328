<?php

/* getModel()
 * Returns an array of models
 * @return array
 */
function getModel()
{
    $models = array("228i", "320i", "328i", "335i", "428i", "528i", "535i", "550i", "640i", "650i", "740i", "750i", "i3", "i8", "M3", "M4", "M5", "M6", "X1", "X3", "X4", "X5", "X6", "Z4");
    return $models;
}


/* getYear()
 * Returns an array of make years
 * @return array
 */
function getYear()
{
    $years = array("2020", "2019", "2018", "2017", "2016", "2015", "2014", "2013", "2012", "2011", "2010", "2009", "2008", "2007", "2006", "2005", "2004", "2003", "2002", "2001", "2000", "1999", "1998", "1997", "1996", "1995", "1994", "1993", "1992", "1991", "1990");
    return $years;
}


/* getWheel()
 * Returns an array of drive train
 * @return array
 */
function getWheel()
{
    $driveTrain = array("All Wheel Drive", "Rear Wheel Drive", "Front Wheel Drive", "Can pick between all/front/rear drive at the push of a button");
    return $driveTrain;
}


/* getRim()
 * Returns an array of rim sizes
 * @return array
 */
function getRim()
{
    $rims = array("Stock Rim Size", "16''", "17''", "18''", "19''", "20''", "21''", "22''", "23''", "24''", "25''", "26''");
    return $rims;
}


/* getSpinner()
 * Returns an array of spinner yes or no
 * @return array
 */
function getSpinner()
{
    $spinners = array("Yes", "No");
    return $spinners;
}


/* getColor()
 * Returns an array of spinner yes or no
 * @return array
 */
function getColor()
{
    $colors = array("White", "Black", "Yellow", "Gray", "Imperial Blue", "Pink", "Orange", "Green", "Purple", "Sky Blue", "Brown");
    return $colors;
}


/* getExhaust()
 * Returns an array of spinner yes or no
 * @return array
 */
function getExhaust()
{
    $exhaust = array("Stock Exhaust System", "MagnaFLow", "Flowmaster American Thunder", "Heartthrob Exhaust System", "Borla", "MBRP", "Corsa", "PaceSetter", "JBA", "Invidia");
    return $exhaust;
}


/* getEngine()
 * Returns an array of interior leather options
 * @return array
 */
function getEngine()
{
    $engine = array("S55 (3.0 Liter Twin Turbocharged I6)", "S63 (4.4 Liter Twin Turbocharged V8)", "S65 (4.0 Liter Naturally Aspirated V8)", "M88 (3.5 Liter Naturally Aspirated I6)", "S70/2 (6.1 Liter Naturally Aspirated V12)", "Electric (Varies)");
    return $engine;
}


/* getSpinner()
 * Returns an array of spinner yes or no
 * @return array
 */
function getTransmission()
{
    $transmission = array("Manual", "Automatic");
    return $transmission;
}


/* getLeather()
 * Returns an array of interior leather options
 * @return array
 */
function getLeather()
{
    $leather = array("Stock Leather", "Nylon", "Polyester", "Vinyl", "Faux materials", "Brown Leather (Black stitching)", "Black Leather (Red stitching)", "Red Leather (Black stitching)", "White Leather (White stitching)", "White Leather (Red stitching)", "White Leather (Black stitching)", "Tan Leather (Black Stitching)");
    return $leather;
}


/* getSeat()
 * Returns an array of seat options
 * @return array
 */
function getSeat()
{
    $seats = array("2 seats 2 doors", "2 seats 4 doors", "5 seats 2 doors", "5 seats 4 doors", "8 seats 4 doors");
    return $seats;
}


/* getStereo()
 * Returns an array of stereo options
 * @return array
 */
function getStereo()
{
    $stereo = array("Harman Kardon", "Bang & Olufsen", "Boise", "Sony");
    return $stereo;
}


/* getNavigation()
 * Returns an array of stereo options
 * @return array
 */
function getNavigation()
{
    $navigation = array("Yes, add navigation system", "No, don't add navigation system");
    return $navigation;
}


/* getHeadsUp()
 * Returns an array of stereo options
 * @return array
 */
function getHeadsUp()
{
    $headsUp = array("Yes, add heads up display system", "No, don't add heads up display system");
    return $headsUp;
}

/* getNumWheels()
 * Returns an array of number of wheels available
 * @return array
 */
function getNumWheels()
{
    $wheels = array("4 wheels, 2 axles", "2 wheels in the front (1 axle), 4 in the back (2 axles)",
        "4 wheels in the front (2 axles) , 2 in the back (1 axle)");
    return $wheels;
}
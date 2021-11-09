<?php

/* getGender()
 * Returns an array of genders
 * @return array
 */
function getGender()
{
    $genders = array("Male", "Female");
    return $genders;
}


/* getSex()
 * Returns an array of genders
 * @return array
 */
function getSex()
{
    $sexes = array("Male", "Female");
    return $sexes;
}


/* getStates()
 * Returns an array of state options
 * @return array
 */
function getStates()
{
    $states = array("---Please Select---", "AK", "AL", "AR", "AZ", "CA", "CO", "CT", "DC", "DE", "FL", "GA", "HI", "IA", "ID", "IL", "IN", "KS", "KY", "LA", "MA", "MD", "ME", "MI", "MN", "MO", "MS", "MT", "NC", "ND", "NE", "NH", "NJ", "NM", "NV", "NY", "OH", "OK", "OR", "PA", "PR", "RI", "SC", "SD", "TN", "TX", "UT", "VA", "VT", "WA", "WI", "WV", "WY");
    return $states;
}


/* getIndoor()
 * Returns an array of outdoor interests options
 * @return array
 */
function getIndoor()
{
    $indoor = array("tv", "movies", "cooking", "drawing", "puzzles", "reading", "singing", "sleeping");
    return $indoor;
}


/* getOutdoor()
 * Returns an array of outdoor interests options
 * @return array
 */
function getOutdoor()
{
    $outdoor = array("hiking", "biking", "swimming", "collecting", "walking", "climbing");
    return $outdoor;
}

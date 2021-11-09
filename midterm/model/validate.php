<?php

/* Return a value indicating if food parameter is valid
   Valid name are not empty and do not contain anything except letters
   @param String $food
   @return boolean
*/
function validName($name)
{
    $name = str_replace(' ', '', $name);
    return !empty($name) && ctype_alpha($name);
}

/* Return a value indicating if meal is valid
   Valid options are in the array getOptions()
   @param String $option
   @return boolean
*/
function validOptions($option)
{
    $options = getOptions();
    return in_array($option, $options);
}
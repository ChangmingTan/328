<?php

function validName($name)
{
    return !empty(trim($name));
}

function validOptions($selectedOptions)
{
    $validOptions = array("The Grasshopper", "Whiskey Maple Bacon", "Carrot Walnut", "Salted Caramel Cupcake", "Red Velvet", "Lemon Drop", "Tiramisu");
    foreach ($selectedOptions as $option) {
        if (!in_array($option, $validOptions)) {
            return false;
        }
    }
    return true;
}
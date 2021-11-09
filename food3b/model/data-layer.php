<?php

    //data-layer.php

    /* getMeals()
     * Returns an array of meal options
     * @return array
     */
    function getMeals()
    {
        $meals = array("breakfast", "lunch", "dinner");
        return $meals;
    }

    /* getCondiments()
    * Returns an array of condiments
    * @return array
    */
    function getCondiments()
    {
        $conds = array("mayonnaise", "ketchup", "mustard", "sriracha");
        return $conds;
    }
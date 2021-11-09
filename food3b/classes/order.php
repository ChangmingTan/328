<?php

class FoodOrder
{
    //Declare instance variables
    private $_food;
    private $_meal;
    private $_condiments;

    /** Default constructor
     * @param $food the food
     * @param $meal the meal
     * @param $condiments the condiments
     */
    public function __construct($food = "scrambled eggs",
                                $meal = "breakfast",
                                $condiments = array("salt", "pepper"))
    {
        $this->setFood($food);
        $this->setMeal($meal);
        $this->setCondiments($condiments);
    }

    /** Set the food
     * @param $food the food
     */
    public function setFood($food)
    {
        $this->_food = $food;
    }

    /**
     * @return string the meal
     */
    public function getMeal()
    {
        return $this->_meal;
    }

    /**
     * @param string the $meal
     */
    public function setMeal($meal)
    {
        $this->_meal = $meal;
    }

    /**
     * @return array the condiments
     */
    public function getCondiments()
    {
        return $this->_condiments;
    }

    /**
     * @param array the $condiments
     */
    public function setCondiments($condiments)
    {
        $this->_condiments = $condiments;
    }

    /** Get the food
     * @return the food
     */
    public function getFood()
    {
        return $this->_food;
    }

    /** toString() returns a String representation
     *  of an order object
     * @return string
     */
    public function toString()
    {
        $out = $this->_food . ", ";
        $out .= $this->_meal . ", ";

        if (!empty($this->_condiments)) {
            $out .= implode(" & ", $this->_condiments);
        }

        return $out;
    }
}

/* For testing purposes only */
/*
$order = new FoodOrder("pizza", "lunch", array("parmesan", "red pepper flakes"));
echo $order->toString() . "<br>";
$order2 = new FoodOrder();
echo $order2->toString() . "<br>";
$order3 = new FoodOrder("tacos", "dinner");
$order3->setCondiments(array("taco sauce", "sour cream"));
echo $order3->toString() . "<br>";
*/

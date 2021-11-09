<?php

/**
 * Class Controller
 */
class Controller
{
    private $_f3; //router
    private $_validator; //validation object

    /**
     * Controller constructor.
     * @param $f3
     * @param $validator
     */
    public function __construct($f3, $validator)
    {
        $this->_f3 = $f3;
        $this->_validator = $validator;
    }

    /**
     * Display the default route
     */
    public function home()
    {
        //echo '<h1>Welcome to my Food Page</h1>';

        $view = new Template();
        echo $view->render('views/home.html');
    }

    /**
     * Process the order route
     */
    public function order()
    {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            var_dump($_POST);
            //["food"]=>"tacos" ["meal"]=>"lunch"

            //Validate food
            if (!$this->_validator->validFood($_POST['food'])) {

                //Set an error variable in the F3 hive
                $this->_f3->set('errors["food"]', "Invalid food item");
            }
            if (!$this->_validator->validMeal($_POST['meal'])) {

                //Set an error variable in the F3 hive
                $this->_f3->set('errors["meal"]', "Invalid meal.");
            }
            //Data is valid
            if (empty($this->_f3->get('errors'))) {

                //Create an order object
                $order = new FoodOrder();
                $order->setFood($_POST['food']);
                $order->setMeal($_POST['meal']);

                //Store the object in the session array
                $_SESSION['order'] = $order;

                //Redirect to Order 2 page
                $this->_f3->reroute('order2');
            }
        }

        $this->_f3->set('meals', getMeals());
        $this->_f3->set('food', $_POST['food']);
        $this->_f3->set('selectedMeal', $_POST['meal']);
        $view = new Template();
        echo $view->render('views/orderForm.html');
    }

    /**
     *
     */
    public function order2()
    {
        $conds = getCondiments();

        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($this->_validator->validCondiments($_POST['conds'])) {
                //Add the data to the object in the session array
                $_SESSION['order']->setCondiments($_POST['conds']);

                //Redirect to summary page
                $this->_f3->reroute('summary');
            }
        }

        $this->_f3->set('conds', $conds);
        $view = new Template();
        echo $view->render('views/orderForm2.html');
    }

    /**
     *
     */
    public function summary()
    {
        //Write order to database
        $GLOBALS['db']->writeOrder($_SESSION['order']);

        //echo '<h1>Thank you for your order!</h1>';

        $view = new Template();
        echo $view->render('views/summary.html');

        session_destroy();
    }

    public function display()
    {
        //echo "<p>Display method</p>";
        $result = $GLOBALS['db']->getOrders();
        //var_dump($result);

        $this->_f3->set('orders', $result);

        //Create a view that displays *all* of the
        //results, e.g. id, food, meal, condiments, date
        //as a table
        $view = new Template();
        echo $view->render('views/display.html');
    }
}
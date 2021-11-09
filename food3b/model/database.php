<?php
/*
 * CREATE TABLE food_order (
 	order_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    food VARCHAR(50),
    meal VARCHAR(10),
    condiments VARCHAR(100),
    date_time DATETIME DEFAULT NOW()
)

INSERT INTO food_order (food, meal, condiments)
VALUES ('sandwich', 'breakfast', 'sriracha, mayonnaise');
 */

//Require config file
require '/home/ctangree/config.php';

class Database
{
    private $_dbh;

    function __construct()
    {
        //Connect to database with PDO
        try {
            //Instantiate a database object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo 'Connected to database!';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function writeOrder($order)
    {
        //var_dump($order);

        //Convert condiments array to a string
        $conds = $order->getCondiments();
        if (empty($conds)) {
            $conds = "";
        } else {
            $conds = implode(", ", $conds);
        }

        //Write to database
        //1. Define the query
        $sql = "INSERT INTO food_order (food, meal, condiments)
                VALUES (:food, :meal, :condiments)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $statement->bindParam(':food', $order->getFood());
        $statement->bindParam(':meal', $order->getMeal());
        $statement->bindParam(':condiments', $conds);

        //4. Execute the statement
        $statement->execute();

        //5. Process the results - SKIP
    }

    function getOrders()
    {
        //Read from database
        //1. Define the query
        $sql = "SELECT * FROM food_order 
                ORDER BY date_time DESC";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters - SKIP

        //4. Execute the statement
        $statement->execute();

        //5. Process the results
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
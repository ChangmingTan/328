<?php

//pdo-pets.php
//Require config file
require '/home/ctangree/config.php';

//Connect to database with PDO
try {
    //Instantiate a database object
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    echo 'Connected to database!';
} catch (PDOException $e) {
    echo $e->getMessage();
}

//1. Define the query
$sql = "INSERT INTO pets (type, name, color)
        VALUES (:type, :name, :color)";

//2. Prepare the statement
$statement = $dbh->prepare($sql);

//3. Bind the parameters
$type = 'kangaroo';
$name = 'Joey';
$color = 'purple';
$statement->bindParam(':type', $type);
$statement->bindParam(':name', $name);
$statement->bindParam(':color', $color);

//4. Execute the statement
$statement->execute();

//5. Process the result (if there is one)

//1. Define the query
$sql = "SELECT * FROM pets";

//2. Prepare the statement
$statement = $dbh->prepare($sql);

//3. Bind the parameters

//4. Execute the statement
$statement->execute();

//5. Process the result (if there is one)
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    echo "<p>" . $row['id'] . " - " . $row['name'] . "</p>";
}
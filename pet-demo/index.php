<?php

    require "pet.php";
    require "dog.php";
    $myDog = new Pet("Rover"); //now it shoes Rover
    echo $myDog->getName();

    $yourDog = new Dog("Fred");
    echo $yourDog->toString();
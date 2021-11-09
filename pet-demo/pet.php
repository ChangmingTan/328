<?php

class Pet
{
    private $_name;

    public function __construct($name = "Fido")
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function toString()
    {
        return $this->_name;
    }

    public function test()
    {
        echo "This is a test";
    }
}
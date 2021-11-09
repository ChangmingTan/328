<?php

class Dog extends Pet
{
    public function toString()
    {
        //return $this->_name;
        //in contrary to Java, this does not work in php.
        //Object does not inherit the private variables from the parent.
        //Cannot directly access private variables directly.
        //I have to access them through the public methods.
        return $this->getName();

        //test();
        //this is not reached, does not work because test() is private in Pet
        //only public methods are inherited...
    }
}
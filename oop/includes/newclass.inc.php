<?php

class Person
{
    public $first = "Jon";
    private $last = "Doe";
    private $age = "28";

}

class Pet extends Person
{
    public function owner()
    {
        $a = $this->first;
        return $a;
    }
}

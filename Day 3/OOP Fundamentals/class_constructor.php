<?php

class User {

    public $userName;

    public function __construct($value) 
    {
        $this->userName = $value;
    }

    public function setUsername() 
    {
        echo $this->userName;
    }
}

$user = new User('naveen');

echo $user->userName;

/* 
A constructor is a special function inside a class that runs automatically
when you create a new object.
It’s mainly used to set up the object’s initial values 
(like filling in its basic details right away). 

We use $this inside a class to access that object’s own properties or methods.
*/
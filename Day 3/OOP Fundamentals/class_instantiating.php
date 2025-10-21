<?php 

class User {

    public function create() 
    {
        return "Creating User";
    }

}


//This is called an object instantiated the class here with new keyword.
$user = new User;

$admin = new User;

echo $user->create();
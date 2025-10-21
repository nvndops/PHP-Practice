<?php

class User {
    private $name;

    private $email;

    public function __construct($name, $email) {
        // $this->name = $name;
        // $this->email = $email;
        $this->setEmail($email);
    }

    //Getter
    public function getEmail(){
        return $this->email;
    }


    public function setEmail($email) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
        } else {
            echo "Not a Vaild Email";
        }
    }
}

$user = new User("Gon", "abc@gmail.com");

$user->setEmail('updated@gmail.com');

echo $user->getEmail();
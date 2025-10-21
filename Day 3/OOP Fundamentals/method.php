<?php


class User {

    public function create(){

    }
}

$method = get_class_methods('User');

var_dump($method);
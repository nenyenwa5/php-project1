<?php

class User{
    public $name;
    public $email;
    public $password;
}

//$user1 = new User();
//$user1->name = 'Chy';

//echo $user1->name;

function set_name($name){
    $this->name = $name;
}

function get_name(){
    return $this->name;
}

//instantiate a user object
$user1 = new User();
$user2 = new User();

$user1->set_name('brad');
$user2->set_name('James');

echo $user1->get_name();
echo $user2->get_name();


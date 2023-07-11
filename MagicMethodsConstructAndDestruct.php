<?php

class User{
    public function __construct(){
    echo "User class is created";
}


public function Testing(){
    echo 'Testing Funciton';
}


public function __destruct(){
    //echo"Destructor called for user object.";
    echo 'This is User Destructot';

}



}

/// DependencyInjection

echo '<br>';

$user= new User();

echo '<br>';
$user->Testing();
echo '<br>';

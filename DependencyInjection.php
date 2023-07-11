<?php

echo 'Dependency Injection';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



///لحل مشكلة ال single inhertace 



Class User{
    private $name;
  public function sayHello(){
    echo "Hello user<br>";
  }
  public function sayGoodBye(){
    echo "Bye user<br>";
  }


}


class Car {
    private User $user;
    public function __construct(User $user){
        $this->user=$user;
    }
    public function defination(){
        echo 'hi this is defination function';
    }

    public function Testing(){
        $this->user->sayHello();
        $this->user->sayGoodBye();
        

    }
  
}



//13 - MagicMethodsPropertyOverloading



$user =new User();
$car =new Car($user);

$car->Testing();


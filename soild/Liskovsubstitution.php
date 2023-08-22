<?php





/*

chaildClass extends parentClass
$obj =new parentClass();
$obj =new chaildClass();

/*
C# code 

عندي class A parent and B and C child class inhert from A 
ينفع اعمل كدا
A obj =new B();
A obj =new C();
 /

لو الاب مش موجود الابن يقدر يحل مكان الاب 


https://mohasin-dev.medium.com/how-to-use-liskov-substitution-principle-in-php-laravel-df253fd38c8
*/

interface QuackableInterface{
    public function Quack();
}
interface FlyableInterface{
    public function Fly();
}
interface swimmableInterface{
    public function swim();
}


/*

لو عندي نوع من البط بيسبح ويجري 



*/

class swim_and_quack_brid implements QuackableInterface , swimmableInterface{
    public function Quack(){
        echo "Quack";

    }
    public function swim(){
        return 'swim';

    }
}


/*

لو عندي نوع من البط بيسبح وبيطير   



*/


class swim_and_fly_brid implements FlyableInterface , swimmableInterface{
    public function Fly(){
        echo "swim";

    }
    public function swim(){
        return 'swim';

    }
}


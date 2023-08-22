<?php



/*
heigh level moduel should not depend on low level module should depend on abstraction 
https://mohasin-dev.medium.com/how-to-use-dependency-inversion-principles-in-php-laravel-eada45fe7aec

*/




interface payment{
    public function pay();
}


class CreditCard implements payment{
    public function pay(){
        echo "paying with credit card";
    }
}
class fawaryPayment implements payment{
    public function pay(){
        echo "paying with fawaryPayment";
    }
}


class userPayment{
    private payment $pa;
    public function __construct(payment $pa){
        $this->pa=$pa;
        $this->pa->pay();


    }
}


$obj = new CreditCard();
$obj2 = new fawaryPayment();

$us = new userPayment($obj);

<?php

/*

open for extenstion not for modification 


extenstion => الوراثة 


تطبق مبدا ال polymorphism and abstraction 
///


*/



interface payableInterface{
    public function getPayment();
}

class payWithPaybal implements payableInterface{
    public function getPayment(){
        return "pay with Paypal";
    }

}


class payWithCridtCard implements payableInterface{
    public function getPayment(){
        return "pay with Cridt Card ";
    }
}


class wirePaymemt implements payableInterface{
    public function getPayment(){
         return"wire payment";
    }
}

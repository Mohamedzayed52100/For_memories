<?php

/*
قسم ال interface الي interface اصغر 
مثلا لو عندي انترفيس كبير قسمه الي 2 انترفيس او 3 بحيث مش كل ال class 
اللي هتعمله imolement مش تعمل implemnt لكل الفانكشن 

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


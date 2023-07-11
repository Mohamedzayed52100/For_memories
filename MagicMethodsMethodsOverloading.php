<?php



//call and call static 

//Magic Methods Methods Overloading
echo  "Magic Methods Methods Overloading";


echo '<br>';
echo '<br>';
echo '<br>';



class User
{
    public function sayHi()
    {
        echo 'Hi';
    }
    private function sayWelcome()
    {
        echo 'welcome';
    }
    protected function sayHello()
    {
        echo 'Hello';
    }

    public function Testing($args){

        var_dump($args);

    }
    public function __call($name, $args) //name of function and it's arguments 
    {
        if(method_exists(__CLASS__  , $name)){
          //  echo 'mohamed';
            $this->$name(...$args);

        }
        else {
           
            echo 'funciton not founded';

        }
    }

    public static function __callStatic( $name, $args)//for static funciton
    {
        if(method_exists(__class__, $name)){
            $name(...$args);

        }
        else {
           
            echo '<br><br><br>funciton not founded<br><br><br>';

        }
    }




}



//ObjectSerialization
$obj =new User();



$obj->Using('mohamed');

echo '<br>';
$obj->zayedIsRight();


echo '<br>';

User::gradPro();

echo '<br>';


var_dump(User::class);

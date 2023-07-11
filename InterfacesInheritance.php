<?php




echo '<h1>Interfaces Inheritance</h1>';





class Person{


    private string $name;
    private int $age;

    public function __construct(string $name  , int $age){
        $this->name =$name;
        $this->age =$age;
    }

    public function getName():string 
    {
        return $this->name;

    }
    public function getAge():int  
    {
        return $this->age;

    }



}


class Employee extends Person{

    private float $salary;
    public function __construct(string  $name , int $age  , float $salary){
       /// parent::__construct("John",30); //calling the constructor of person class and passing values


       parent::__construct($name , $age );

       $this->salary=$salary;
    }



    public function sayHello(){
        return 'hello user';

    }
}
 


$emp =  new Employee( 'ahmed' , 23 ,  5.5);

echo '<br>';
echo $emp->sayHello();
echo '<br>';
echo $emp->getAge();
echo '<br>';
echo $emp->getName();
echo '<br>';
echo '<br>';








//////////// Interface inhertace 


interface Firqst{
    public function test1();
    public function test2();
}

interface Secsond{
    public function test3();
    public function test4();
}


interface Threqe extends Firqst{
    
     public function test5();
}

class Tester implements Threqe , Secsond{

    public function test5(){
        return  5;
    }
    
    public function test3(){
        return 3;
    }
    public function test4(){
        return 4;
    }
    
    
    public function test1(){
        return 1;
    }
    public function test2(){
        return   2;
    }
}



$obj = new Tester();
echo '<br>';
echo '<br>';

echo $obj->test1();
echo '<br>';
echo '<br>';
echo $obj->test2();

echo '<br>';
echo '<br>';
echo $obj->test3();

echo '<br>';
echo '<br>';
echo $obj->test4();

echo '<br>';
echo '<br>';
echo $obj->test5();

echo '<br>';
echo '<br>';



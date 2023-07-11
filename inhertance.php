<?php

class Person{
    protected string $name;
    protected int  $age;
    protected string $type;
    protected float $salary=0.0 ;
  public function __construct(string $name,int $age  , string $type , float $salary){
    $this->name=$name;
    $this->age=$age;
    $this->type=$type;
    $this->salary=$salary;
}

public function getName():string{
    return $this->name;

}
public function getAge():int {
    return $this->age;

}
public function getType():string{
    return $this->type;

}
public function getSalary():float{
    return $this->salary;

}
 




};

//AbstractionAndPolymorphism



class employee extends Person{

    
   
}



$e1 =new employee('ahmed' , 22 , 'male' , 9000);


echo $e1->getAge() ;//. ' '. e1->getSalary();
echo $e1->getSalary();// . ' '. e1->getSalary();


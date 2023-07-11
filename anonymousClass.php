<?php




echo '<br>'; 
echo '<br>';  
echo '<h1>anonymous Class</h1>';
echo '<br>'; 
echo '<br>'; 
echo '<br>';  
echo '<br>';  


/*
لو عايز استخدم ال class لمرة واحدة فقط
*/



$newClass =new class{

    private int $age;
    private string  $name;
    public function setData($name , $age){
        $this->name= $name;
        $this->age= $age;


}

public function getData(){
    return "My name is ".$this->name." and I am ". $this->age .'<br>';
}
public function sayHello(){
    return "Say hello<br>";
}
};
// create object of the anonymous class using new keyword. Here we are not passing any arguments
$newClass->setData('mohamed' ,22);
echo $newClass->getData();
echo $newClass->sayHello();

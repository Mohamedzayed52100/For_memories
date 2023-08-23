<?php


/*
abstraction is implentation by abstract class and interface

*/

///abstraction

//polymorphism 

interface Polygon{

  

    public function calcuteArea(); //must me public and there's no any implimation or body 


}

 
/**
 * Summary of Rectangel
 */
class Rectangel implements Polygon{
    public function calcuteArea(){

    }

}



abstract class Shape{


    public int $size;
    public function   is3D() : bool{


        return true;

    }

    public function setSize($size){
        $this->size =$size;
    }


    abstract public function calcuateArea(int $x);





}



class Circle extends Shape{
    public function calcuateArea( int $x){
        echo "Calculating Area for a circle" .$x*$x*3.14;

    }
}


echo "\n";
echo "\n";
echo "\n";

$cir= new Circle();

$cir->calcuateArea(50);


/*************************************************** */

abstract class Logger{

    abstract public function log($content);

}


class LogsInTxt extends Logger{
    public function log($content){
       return "this logs is $content";
    }

}
class LogsInAnd extends Logger{
    public function log($content){
       return "this logs is $content";
    }

}


//Encapsulation



$logsTxt = new LogsInTxt();
echo $logsTxt->log('mohamed');
// Output: this logs is mohamed
$logand= new LogsInAnd();
echo  $logand->log("ali");
//Output :  This method cannot be called statically





interface template{
    public function PrntType ();
}

class A implements template{
    public function PrntType (){
        echo 'This type of printing A ';
    }

}
class B implements template{
    public function PrntType (){
        echo 'This type of printing B';
    }

}
class C implements template{
    public function PrntType (){
        echo 'This type of printing C';
    }

}


function describe(template $type){
    $type->PrntType();
}

$objc=new C();
echo '<br>';
$objb=new B();
echo '<br>';
$obja=new A();

echo '<br>';
describe($objc);
echo '<br>';
describe($obja);

echo '<br>';
describe($objb);
echo '<br>';
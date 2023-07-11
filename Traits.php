<?php




//cann't make with it object 
trait CarTrait{
    public function carstart(){
    echo "Car started";
}
public function carstop(){
    echo"car stopped";
}
public function carrepair(){
    return "car repaired";
}
public function carfail(){
    return 'car failed';
}

abstract public function XX();



}
class RealPerson {
    use CarTrait;


    public function isPerson(){
        $this->carstart();
          
      
    }


    public function Testing(){
        $this->carfail();
    }

    public function XX(){
        echo 'XX funciton';

    }


}


$newobj =new RealPerson();
$newobj->Testing();
$newobj->isPerson();
$newobj->XX();

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


class MainClass {
    public function greeting() {
        echo 'Good Day From MainClass<br>';
    }
}

trait DesiredClass {
    public function welcome() {
        //parent::greeting();
        echo 'Welcome To Traits';
    }
}

class NewClass extends Mainclass {
    use DesiredClass;
}

$myObject = new NewClass();
$myObject ->greeting();
$myObject->welcome();





echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


trait hello {
    public function message1() {
      echo "Nature is precious,\n";
    }
  }
  
  trait world{
    public function message2() {
      echo "So Let us unite to preserve it";
    }
  }
  
  class InUnity {
    use hello;
  }
  
  class WeCan {
    use hello, world;
  }
  
  $obj = new InUnity();
  $obj->message1();
  echo "****************\n";
  $obj2 = new WeCan();
  $obj2->message1();
  $obj2->message2();




  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';



  class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();



echo '<br><br><br>************************************************************************<br><br><br>';


class Based{
    final const countryName="US";


    public static $smalGirl="farah";

    public function Test1(){
        echo 'this is test1<br>';
    }
    public function A(){
        echo 'A Based';

    }

    public function C(){
        echo 'based<br>';
    }
}

trait Basing{


    protected string $data;
    private string  $name="mohamed";
     public const BI =3.14;
     public const FLAG_IMMUTABLE = 5;

 


    public function Test2(){
        echo 'this is test2<br>';

    }
    public function A(){
        echo 'A Basing2';
        
    }
    public function C(){
        echo 'basing..<br>';
    }
    public function getDaat(){
        return $this->data;
    }


    abstract public function setData($data);

}
class Main extends Based{
    use Basing;
     //use trait name here

     public function maining(){

        parent::C();
        echo $this->name;
     }
     public function setData($data){
        $this->data =$data;
     }

}


$newit = new Main();
echo '<br>';
$newit->Test1();
echo '<br>';
$newit->Test2();
echo '<br>';
$newit->A();
echo '<br>';
$newit->maining();
echo '<br>';
echo $newit::BI;
echo '<br>';
echo $newit::countryName;
echo '<br>';
echo $newit::$smalGirl;
echo '<br>';
$newit->setData('moahmed****');
echo '<br>';
echo $newit->getDaat();
echo '<br>';



echo '<br><br><br>************************************************************************<br><br><br>';



trait Counter {
    static    $c = 0;
    public function inc() {
      
        self::$c = self::$c + 1;
        echo self::$c;
    }
}

class C1 {
    use Counter;
}

class C2 {
    use Counter;
    public string $name =null;
    public function YY(){
        echo 'YY';
    }

}
$p = new C2();
echo $p?->name ?'hh' : 1;
$p->YY();
$o = new C1(); $o->inc(); // echo 1
 $p->inc(); // echo 1
 
 
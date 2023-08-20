<?php


/*
final keyword في الواثة تمنع الفانشكن من ال override


final class ال class مش هيحصله وراثة لكن اقدر اعمل منه اوبجيكت 
*/
 
class First{
    public function Get(){
        return "Hello World";
    }

    public final function Getting(){

        return 'cant be orverridding';

    }

}
class Second extends First {
    public function Get(){
        return "Hello World from Second class";
    }

    public function Gettings(){
        return parent::Getting()."<br>"; //calling the method of Parent Class.
    }
}

final class Three{
    public function Testing(){
        echo "<h2>This is a Final class</h2>";
    }
}


class Four  {
  public function Using(){
    return 'this is using function';

  }
}

echo '<br>';
$newobj1 = new First;

echo $newobj1->Getting();

echo '<br>';
$newobj = new Second;
echo $newobj->Get();
echo '<br>';
echo $newobj->Gettings();


echo '<br>';
$f= new Three();
$f->Testing();

echo '<br>';
echo '<br>';

$neFour=  new Four();
print_r($neFour);




function Testing(...$args){
    var_dump($args);
}



$arr= array([1,2,3,4,5,6,7,8,9]);



Testing($arr);

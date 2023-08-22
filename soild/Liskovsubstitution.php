<?php





/*

chaildClass extends parentClass
$obj =new parentClass();
$obj =new chaildClass();

/*
C# code 

عندي class A parent and B and C child class inhert from A 
ينفع اعمل كدا
A obj =new B();
A obj =new C();
 /

لو الاب مش موجود الابن يقدر يحل مكان الاب 


*/



////////////////////////////////////////////////////


class TheParent {
    public function DoWork(){
        echo "this is paraent class and DoWork function";
    }
    
}


class Child extends TheParent{
    public function DoWork(){
        echo "this is Child class and DoWork function";
    }
}


function XYZ(TheParent $theParent){
    $theParent->DoWork();

}




$newObj =new TheParent();


XYZ($newObj);


echo '<br>';
echo '<br>';
echo '<br>';

$newObj = new Child();
XYZ($newObj);


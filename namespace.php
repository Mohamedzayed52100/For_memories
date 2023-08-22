
<?php
/*
بقسم الفيلات كأنها directoy 



طريقة لتجيمع ملفات ال php

name collections حل مشكلة 

اللي هي تضارب الاسماء بمعني لو عندي ملفين بنفسم الاسم او 2 كلاس بنفس الاسم 


التنظيم 


autoloading علشان مكتبش ال path 
علشان مكتبش 
require and include 

*/

interface aA{
      function test();

}


abstract class TTP{
    private $g =10 ;
   abstract protected function TR();


   public static function sayName(){
    echo "mohamed";
   }
}

class BD implements aA{
    function test(){
        echo "test";
    }
}


$N = new BD();
$N->test();



echo '<br>';
echo '<br>';
echo '<br>';

TTP::sayName();

<?php

/*
عبارة عن فانكشن نفس الكونسبت في js 


تقسيم الفانكشن علي اجزاء 
using yield 



*/


function Testing() {
    echo "First call<br>";
    yield 'call';
    echo "Second call<br>";
    yield 'call';

    echo "Third call<br>";
    yield 'call';

    echo "Fourth call<br>";
    yield 'call';

}

/*

معاملة معاها زي المعاملة مع الاوبجيكت 

*/
$newObj = Testing();
echo '<br>';
echo '<br>';
echo $newObj->current();
echo '<br>';
echo $newObj->next();
echo '<br>';
echo $newObj->current();
echo '<br>';
echo $newObj->next();
echo '<br>';
echo $newObj->current();
echo '<br>';


echo '<br><br><br>******************************<br><br><br>';
foreach (range(1, 50 ) as $key => $value) {
     echo "key is = ".$key ." and the value is ".$value .'<br>';

    
}
echo '<br><br><br>******************************<br><br><br>';



$arr= range(1, 50 ,5);
var_dump($arr);
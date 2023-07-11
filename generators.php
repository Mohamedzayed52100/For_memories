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

$newObj = Testing();

$newObj->current();
$newObj->next();
$newObj->current();
$newObj->next();
$newObj->current();


echo '<br><br><br>******************************<br><br><br>';
foreach (range(1, 50 ,5) as $key => $value) {
    echo $key. ' ';
    
}
echo '<br><br><br>******************************<br><br><br>';



$arr= range(1, 50 ,5);
var_dump($arr);
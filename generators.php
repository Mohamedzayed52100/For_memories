<?php

/*
عبارة عن فانكشن نفس الكونسبت في js 


تقسيم الفانكشن علي اجزاء 
using yield 


بيحصلة implements من ا لinterface دي 

generator iterator traversable 





memory_get_peak_usage  بتجيب استهلاك الميموري قد اي 
ولو استحدمت ال generator هيبقي استهلاك الميميوي بصفر









*/


$inital=memory_get_peak_usage(true);


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


echo '<br><br><br>******************************<br><br><br>';


 function generator($mx =15){
    $arr=[];
for($i = 0 ; $i < $mx ; $i++) {
    $arr[] = $i + 1;
}
return $arr;
    
 }
 var_dump((generator()));

 echo '<br><br><br>******************************<br><br><br>';


 function generator2($mx =15){
     
for($i = 0 ; $i < $mx ; $i++) {
    yield $i;

}
     
 }

 $gen = generator2(10);

var_dump($gen->current());
$gen->next();
var_dump($gen->current());


// foreach($gen as $item){var_dump($item);}



echo memory_get_peak_usage(true) -$inital;





function buildJson($rows)
{
    yield '[';
    foreach($rows as $row){
        yield json_encode([$row]);
    }
    yield ']';
}
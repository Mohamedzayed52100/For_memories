<?php


if(5+6 == 11)
goto ecs;

$a_bool = true;   // a bool
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an int

$nullvalue = null;

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str) , "\n";

if(is_null($nullvalue))
echo "null";
else 

echo "not null";

echo '<br>';
echo '<br>';
echo '<br>';
$arr= [1,2,3,4,5];
print_r($arr);
$arr[] =6;
echo '<br>';
echo '<br>';
echo '<br>';
print_r($arr);

echo '<br>';
echo '<br>';

$a = 1;
$b = 2;

function Sum()
{
    global $a, $b , $a_str;
    echo '<br>';

    echo $a_str;
    echo '<br>';

    $b = $a + $b;
} 

Sum();
echo $b;



class person{
    public  static int $numer =0 ;
    public function __construct(){
        self::$numer+=1;

    }



}


echo '<br>';
echo '<br>';

$newOnj1= new person();

echo $newOnj1::$numer;
echo '<br>';
echo '<br>';
$newOnj2= new person();

echo $newOnj2::$numer;
echo '<br>';
echo '<br>';

ecs:
$newOnj3= new person();

echo $newOnj3::$numer;
echo '<br>';
echo '<br>';


$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

var_dump($return_value);
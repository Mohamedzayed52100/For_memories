<?php






echo gettype('mohamed zayed');

echo gettype(123);

echo '<br>';
echo gettype(70.30);
echo '<br>';


echo '<br>';
echo gettype(array("EG" => "Egypt", "KSA" => "Saudi Arabia"));
echo '<br>';

echo 10 + (int)15.5;

echo '<br>';


echo var_dump('mohamed');


define('name' , 'mohamed ibrahim zayed');
echo name;

echo "-100";
echo '<br>';
echo gettype("-100");
echo '<br>';
echo -"-100";
echo '<br>';
echo gettype(-"-100");



 $name ="ahmed";

 $name .= " mostafa";

 echo $name;





 



 $arr= [1,2,3,4,5,6,7,8,9];

 foreach($arr as $key =>$value)echo $value. ' ';


 echo '<br>';
 echo '<br>';
 echo '<br>';

 function sayHello($name ="mohamed"  , $age = 23){
    return "$name is $age years old ";
 }


 echo sayHello(age:20);



 $r= "Kareem";
 $annfunc= function($name) use ($r) {
    return $name . ' '. $r;
 };




 echo $annfunc('zayed');



 echo  '<br>';
 echo  '<br>';
 echo  '<br>';

 $str = "mohamed ibra--him zayed";

//  echo $str;


for( $i =0 ; $i < strlen($str) ; $i++)echo $str[$i];


echo '<br>';

echo lcfirst('MOHAMED ZAYED');

echo '<br>';

echo ucfirst('mohamed zayed');

echo '<br>';
echo '<br>';


echo $str[-1];


echo '<br>';
echo '<br>';


$arr_str =['ahmed' , 'mohamed'  , 'mostafa' , 'khaled'];


$tt = implode(" "  , $arr_str);

echo $tt;

echo '<br>';
echo '<br>';
echo chunk_split("Elzero Web School", 3, "@");
echo '<br>';

echo '<pre>';
print_r(str_split("Elzero"));
echo '</pre>';

echo '<pre>';
print_r(str_split("Elzero", 2));
echo '</pre>';



$friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];

echo '<pre>';
print_r(array_chunk($friends, 2));
echo '</pre>';
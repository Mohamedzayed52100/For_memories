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



 
$fact =50 ;
if($fact-6 == 50)goto zayed;
echo "***************************************************<br>";
echo "***************************************************<br>";
echo "***************************************************<br>";
echo "***************************************************<br>";
echo "***************************************************<br>";
echo "***************************************************<br>";
echo "***************************************************<br>";
echo "***************************************************<br>";
echo "***************************************************<br>";
echo "***************************************************<br>";

zayed:

echo "////////////////////////////////////////////////<br>";
echo "////////////////////////////////////////////////<br>";
echo "////////////////////////////////////////////////<br>";
echo "////////////////////////////////////////////////<br>";
echo "////////////////////////////////////////////////<br>";
echo "////////////////////////////////////////////////<br>";
echo "////////////////////////////////////////////////<br>";
echo "////////////////////////////////////////////////<br>";



function insertIntoArray(array $arr){


   for(  $i =0 ; $i < 50 ; $i++){
      $arr[]=$i+1;

   }
   return   array_reverse ($arr);

}


$a=[];
echo "<hr/>";
print_r(insertIntoArray($a));




echo '<br><br><br>**********************************************<br><br><br>';

echo '<br>';
echo '<br>';
echo gettype('mohamed');
echo '<br>';
echo gettype("MOHAMED");
echo '<br>';
echo '<br>';
echo '<br>';
echo gettext('mohamed');


echo '<br>';

echo '<br>';
echo '<br>';

var_dump((bool) "");
echo '<br>';
var_dump((bool) array());
echo '<br>';
var_dump((bool) []);
echo '<br>';
var_dump((bool) 0);
echo '<br>';
var_dump((bool) "0");
echo '<br>';
var_dump((bool) "Elzero");
echo '<br>';
var_dump((bool) array(1));
echo '<br>';
var_dump((bool) [1]);
echo '<br>';
var_dump((bool) 100);
echo '<br>';
var_dump((bool) -100);
echo '<br>';
var_dump((bool) 10.5);
echo '<br>';
echo '<br>';
var_dump((bool) -10.5);


echo '<br>';

echo '<br>';


echo nl2br('mohamed
zayed
ibrahim');

echo '<br>';
echo '<br>';



echo '<br>';
$aa= "Osama";
$bb  = &$a;
$bb  = "Elzero";
$aa = "School";

echo $aa;
echo '<br>';
echo $bb;
echo '<br>';
echo '<br>';
echo '<br>';

define("BREAKS", "AA");

  echo php_uname();
  echo '<br>';
  echo PHP_VERSION;
  echo '<br>';
  echo __LINE__;
  echo '<br>';
  echo __FILE__;
  echo '<br>';
  echo __dir__;
  echo '<br>';
  echo BREAKS;

  // No Problem Here
  function hello() {
    return "Hello";
  }

  echo hello();

  echo '<br>';
  echo '<br>';


  function calc(...$args){
   $result =0 ;
   foreach($args as $key => $value){
      $result+= $value;
   }
   return $result;

  }


  echo calc(1,2,3,4,5);


  $a =array(1,2,3,4,5,6,7,8,9,10);


  print_r(array_map(function($item){
   return $item +5;
  } , $a));



  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  $f=10;
  function testing(int &$f){
   $f*=10;
  }

  testing($f);

  echo $f;

  echo '<br>';
  echo '<br>';
  
  
  echo lcfirst("mohamed zayed");
  echo ucfirst("mohamed zayed");
  echo '<br>';
  echo '<br>';
  echo str_shuffle("Elzero") . "<br>";
  echo strrev("Elzero") . "<br>";
  
  echo '<br>';
  echo '<br>';
  echo '<br>';

  $str ="mohamed ibrahim zayed";
  
  echo chunk_split("this is string in php language"  , 3 , '|');
  echo '<br>';
  echo strip_tags("<h1>Hello Elzero</h1>");
  echo '<br>';
  

  print_r(str_split("this is string in php language we use it in web developement" , 3  ));
  
  echo '<br>';
  
  
  echo str_replace( 'i' , 'A', "this is string in php language we use it in web developement" , $r);
  echo '<br>';
  echo $r;
  
  echo '<br>';
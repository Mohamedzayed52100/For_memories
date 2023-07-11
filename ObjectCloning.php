<?php    


define('br' , 'echo "<br>"');

/////Object Cloning

echo '<h1>Object Cloning</h1>';


class User{
    private string  $name;
    public function setName(string $name){
        $this->name=$name;
    }
    
    public function getName(): string {
        return $this->name;
    }
}



$user1 =new User();

$user2= &$user1;


var_dump($user1);
echo "<br>";
var_dump($user2);





///InterfacesInheritance

function Testing(...$args){
//     print_r($args);
// //    foreach($args as $key => $value):
// //     echo "key is $key and value is $value <br>";
// //    endforeach;
}

$arr= array([1,2,3,4,5,6,7,8,9]);



//anonymous 

Testing($arr);
<?php




echo "<h1>Object Serialization</h1>";

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


////change dataType  to another 

/*
نغير الداتا تيب الي داتا تيب اخري

*/

///serialize() convert any dataType to string 


class User
{
    private string $name;
    private int $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
    }



    ///get data for age and name 
    public function getName(): string
    {
        return $this->name;
    }
    public function getAge(): int
    {
        return $this->age;
    }

}
$user1 = new User('ahmed', 22);

$user1->setAge(22);
echo $user1->getAge();
echo '<br>';
echo '<br>';



///convert to string 
//للتخزين في الداتا بيز 

$ser= serialize($user1);

echo $ser;


///ObjectCloning


 echo '<br>';

 $unser= unserialize($ser);
 var_dump($unser);
 echo '<br>';
$js_en= json_encode(User::class);

var_dump($js_en);

echo '<br>';
echo '<br>';

$js_de= json_decode($js_en);


echo '<br>';
var_dump($js_en);

echo '<br>';
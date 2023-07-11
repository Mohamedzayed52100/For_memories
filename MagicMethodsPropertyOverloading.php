<?php



echo 'Magic Methods Property Overloading';
//يعني انخا حاجة زيادة 

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


class User
{

    private string $name;
    private int  $age;
    public function __construct(string $_name, int $_age)
    {

        $this->name = $_name;
        $this->age = $_age;
    }



    //

    public function getName(): string
    {
        return $this->name;
    }
    //get age function
    public function getAge(): int
    {

        return $this->age;
    }

    public function __set($key, $value)
    {
        $this->$key = $value;
    }

    public function __get($key)
    {

        //to access private property
        if (property_exists($this, $key))
            // if (property_exists(__CLASS__,$key))
            return $this->$key;
        else {
            echo "No such property exists";
        }
    }
}


//14 - MagicMethodsMethodsOverloading






$user = new User('ahmed', 22);


echo $user->name;

$user->name = 'mohamed';
echo  '<br>';

echo $user->name;


/*

    public function __get($key){

        //to access private property
        if (property_exists(__CLASS__,$key))
        return $this->$key;
        else{
            echo "No such property exists";
        }

    }

*/
echo  '<br>';
echo  '<br>';
var_dump($user);
echo  '<br>';
echo  '<br>';

$user->fullName = 'ahmed mostafa'; //Property Overloading
$user->NationalID = '0109164369312345'; //Property Overloading
/*

the error solved by this function 

    public function __set(  $key , $value ){
        $this->$key =$value;
    }
 

 */
echo  '<br>';
echo  '<br>';
var_dump($user);

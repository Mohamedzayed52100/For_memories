<?php



/*


self ->refer to current class  use with static

this ->refer to current object 

مينفعش استخدم this مع static function 



*/

class Car
{

    public function instance()
    {
        return $this;
    }
    public static $first_name = "ahmed alaa";

    private float  $price = 0;
    private bool   $hasAC = false;

    public  function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice(float  $price)
    {
        $this->price = $price;
    }


    public static function testStatic()
    {
        return self::$first_name;
    }
}



class User
{
    private string $firstName;
    private string  $lastName;

    protected string  $fullName;
    private int $age;



    public Car $userCar;

    private array $hoobies = [];



    public function getFirstName(): string
    {

        return $this->firstName;
    }
    public function setFirstName(string $name)
    {
        if (is_string($name)) {
            $this->firstName = $name;
        }
    }
    // getter and setter for lastName property.
    public function getLasttName(): string
    {

        return $this->lastName;
    }
    public function setLastName(string $lname)
    {

        if (is_string($lname)) {
            $this->lastName = $lname;
        }
    }

    public function getFullName(): string
    {
        return $this->Auto_words() . ' ' . $this->getFirstName() . ' ' . $this->getLasttName();
    }

    //age property


    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public function getAge(): int
    {
        return  $this->age;
    }



    private function Auto_words()
    {
        return 'the full name for user is';
    }


    public function userCarInformation($price): float
    {
        $this->userCar->setPrice($price);
        return $this->userCar->getPrice();
    }
};

$user1 = new User();

// var_dump($user1);



$user1->setFirstName('12');
$user1->setLastName('ibrahim');

echo $user1->getFullName();
// echo $user1->userCarInformation(5.666);



// echo $user1->getFirstName();

$car = new Car();

$car->setPrice(5006.650);
echo '<br>';
echo '<br>';
echo '<br>';
echo Car::testStatic();


echo '<br>';

var_dump($car->instance());
//  var_dump($car->instance());

echo "<br>Car price is: " . $car->getPrice() . "<br>";


class UserR
{
    public int $id;

    public ?string $name;

    public readonly  int   $age;

    public function __construct(int $id, ?string $name, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    function RR()
    {
        echo 'RR';
    }
}

$user = new UserR(1234, null, 222);

echo ($user->id);
echo '<br>';
echo ($user->name);
echo '<br>';
echo ($user->age);
echo '<br>';
echo ($user->RR());
echo '<br>';



class BaseClass
{
    function __construct()
    {
        print "In BaseClass constructor\n";
    }
}

class SubClass extends BaseClass
{
    function __construct()
    {
        parent::__construct();
        print "In SubClass constructor\n";
    }
}

class OtherSubClass extends BaseClass
{
    // inherits BaseClass's constructor
}
echo '<br>';
echo '<br>';
echo '<br>';


// In BaseClass constructor
$obj = new BaseClass();
echo '<br>';
echo '<br>';

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();
echo '<br>';
echo '<br>';

// In BaseClass constructor
$obj = new OtherSubClass();
echo '<br>';
echo '<br>';



class Foo
{
      public const X = "foo";
}

class Bar extends Foo
{
    public const X = "bar";
}


$JJ= new Foo();
echo $JJ::X;


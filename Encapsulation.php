<?php



class User
{

    private int $age;
    private string  $name;

    public function  setAge(int $age)
    {
        $this->age = $age;
    }
    public function getAge(): int
    {
        return   $this->age;
    }
    public function setName($name): void
    {
        if (is_string($name)) {
            $this->name = $name;
        } else {
            "Error: Name should be a String";
        }
    }
    public function getName(): ?string
    {
        return $this->name;
    }
}

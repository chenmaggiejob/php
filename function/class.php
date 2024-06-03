<?php
// 動物類別。
class Animal
{
    public $name = 'animal';
    protected $age = 12;
    private $weight = 100;

    // public function __construct()
    // {
    //     echo $this-> weight;
    //     $this->run();
    // }

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run()
    {
        echo $this->name;
        echo "is running";
        // echo "animal is running";
    }
    private function speed()
    {
        return "high speed";
    }
}

// 動物類別中的貓貓
class Cat extends Animal
{
    public $name = 'cat';

    public function construct()
    {
    }

    public function run()
    {
        echo "cat is running";
        echo $this->speed();
        echo $this->age;
    }

    private function speed()
    {
        return "low speed";
    }
}

// $cat = new Cat();
// echo $cat->name;
// echo $cat->run();

$ani = new Animal('kitty ');
$ani->run();

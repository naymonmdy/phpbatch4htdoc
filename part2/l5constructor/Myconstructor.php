<?php

class Myconstuctor{
    public $num1=100;
    private $num2=200;
    protected $num3=300;

    public $message="Total Result is";

    //Magic Method

    // public function __construct(){
    //     echo "I am start working by automatically";
    // }

    // public function __construct($name){
    //     echo "My name is $name.I am start working by automatically";
    // }

    // public function __construct($age,$name){
    //     echo "My name is $name and age is $age .I am start working by automatically";
    // }

    public function __construct()
    {   
        $result =$this->num1+$this->num2+$this->num3;

        echo $this->message = $result;
        
    }
}

echo "This is my constructor <br/>";
// $obj1= new Myconstuctor();
// $obj1= new Myconstuctor("nay mon");
// $obj1= new Myconstuctor(25,"nay mon");
$obj1= new Myconstuctor();




?>
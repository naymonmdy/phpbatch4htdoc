<?php

class Mydestructor{
    public $num1=100;
    private $num2=200;
    protected $num3=300;

    public $message="Total Result is";

    //Magic Method
    public function __construct()
    {   
        $result =$this->num1+$this->num2+$this->num3;

        echo "$this->message = $result <br/>";
        
    }

    //Member Method

    public function car($brand){
        echo "I brought a new {$brand} car .<br/>";

    }

    //Magic method after all code
    //Note : Destructor can't set parameter
    public function __destruct(){
        echo "I am start working by automatically after all above codes.";
    }
}

echo "This is my destructor <br/>";
// $obj1= new Myconstuctor();
// $obj1= new Myconstuctor("nay mon");
// $obj1= new Myconstuctor(25,"nay mon");
$obj1= new Mydestructor();
$obj1->car("Honda Fit");

echo"<hr/>";




?>
<?php


class Myscoperesolutionoperator{

//Member const variables
const GREETING = "Hello friend";
const THANKS = "Thanks for your invitation friend";
public $fullname = "Nay Mon";


public function sayhi(){
    echo self::GREETING;
   // echo static::GREETING;
}

public function saythanks(){
    echo self::THANKS;
    //echo static::THANKS;
}

public function __construct(){
    echo "Main Contructor function work automatically";
}
}
class Child1 extends Myscoperesolutionoperator{

}

class Child2 extends Myscoperesolutionoperator{
const GREETING = "Hello Student";
public $fullname = "Mon Mon";
const THANKS = "Thanks for your invitation friend,Sirilanka";


public function sayhi(){
    echo self::GREETING;
   // echo static::GREETING;
}

public function saythanks(){
    echo self::THANKS;
    //echo static::THANKS;
}

}

class Child3 extends Myscoperesolutionoperator{
    public function __construct(){
        parent::__construct();
        echo "<br/>";
        parent::sayhi();
        echo "<br/>";

        parent::saythanks();
        echo "<br/>";
        echo "Child Contructor function work automatically";
    }

}
echo "This is my scoperesolution operatror <br/>";

$obj =new Myscoperesolutionoperator();
echo $obj->fullname ."<br/>";
echo $obj::GREETING ."<br/>";//sro
echo $obj::THANKS ."<br/>";//sro
echo Myscoperesolutionoperator::GREETING ."<br/>";
echo"<hr/>";

$obj->sayhi();
echo"<br/>";
$obj->saythanks();
echo"<hr/>";
echo"<hr/>";
echo"<hr/>";

$ch=new Child1();

echo $ch->fullname ."<br/>";
echo $ch::GREETING ."<br/>";//sro
echo $ch::THANKS ."<br/>";//sro
echo"<hr/>";

$ch2=new Child2();
echo $ch2->fullname ."<br/>";
echo $ch2->saythanks() ."<br/>";
echo $ch2->sayhi() ."<br/>";
echo $ch2::THANKS ."<br/>";//sro
echo"<hr/>";

//SELF:: can't overide from child
//Static:: can overide from child

$ch3=new Child3();
echo"<hr/>";
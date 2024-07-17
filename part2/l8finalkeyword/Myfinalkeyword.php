<?php

//final key work is used for restrict method and class not to be share with child class
 class Myfinalkeyword{
    public $fullname = "Aung Kyaw";
    public $city = "Mandalay";
    public $email = "aungkyaw@gmail.com";
    public $password = "4567";

    final public function getaccess(){
        echo"This is sight login :email is $this->email $ password is $this->password .<br/> ";
    }

    public function getinfo(){
        echo"Name is $this->fullname & city is $this->city .<br/>";
    }
  
}
class Developerlogin extends Myfinalkeyword{
    public function gitlablogin(){
        echo"This is gitlab login :email is $this->email $ password is $this->password .<br/> ";

    }
}

echo "This is final Keyword <br/>.";

$obj1 =new Myfinalkeyword();
echo $obj1->fullname ."<br/>";
$obj1->getaccess();
$obj1->getinfo();

echo"<hr/>";

$obj2 =new Developerlogin();
echo $obj2->fullname ."<br/>";
$obj2->getaccess();
$obj2->getinfo();
?>
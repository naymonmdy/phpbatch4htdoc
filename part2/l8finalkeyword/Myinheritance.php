<?php

//Parent Class // Main Class /Super Class
//Note :: define () not work in class method
class Myinheritance{

    public $fullname = "Sandar";
    public $city = "Yangon";
    public $email = "sandar@gmail.com";
    public $password = "123456";

    public function getaccess(){
        echo"This is sight login :email is $this->email $ password is $this->password .<br/> ";
    }

    public function getinfo(){
        echo"Name is $this->fullname & city is $this->city .<br/>";
    }
  
}

//Child class
class Devlogin extends Myinheritance{

    public function githublogin(){
        echo "This is github login :email is $this->email $ password is $this->password .<br/> ";
    }

}

class Socialogin extends Myinheritance{
    public function gmaillogin(){
         echo "This is gmail login :email is $this->email & fullname is $this->fullname .<br/> ";
    }
    public function facebooklogin(){
        echo "This is facebook login :email is $this->email & city is $this->city .<br/> ";
   }
   //Overwrite function method
    public function getinfo() {
        //properities overidding
        $this->fullname = "Nay Mon";
        $this->city = "Mandalay";
        echo"Name is $this->fullname & city is $this->city .<br/>";

    }



}

echo "This is my My inheritance <br/>";

$obj1= new Myinheritance();
echo $obj1->fullname ."<br/>";
echo $obj1->city ."<br/>";
$obj1->getaccess();
$obj1->getinfo();


echo"<hr/>";

$devobj= new Devlogin();
echo $devobj->fullname ."<br/>";
echo $devobj->city ."<br/>";
$devobj->getaccess();
$devobj->getinfo();
$devobj->githublogin();


echo"<hr/>";

$solobj= new Socialogin();
echo $solobj->fullname ."<br/>";
echo $solobj->city ."<br/>";
$solobj->gmaillogin();
$solobj->facebooklogin();
$solobj->getinfo();

echo"<hr/>";

?>
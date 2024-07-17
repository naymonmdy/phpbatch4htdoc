<?php
//Properties and Methods Visiability

//Visiblity                 Availabilty

//Public                    Anywhere : inside other class and oject instances
//Protected                 Inside the current class and any subclassess
//Private                   Inside the current class only



class Classconstant{
    const NAME = "Honey Nway Oo";
    public const CITY = "Yangon";

    protected const EMAIL="honeynwayoo@gmail.com";
    private const PASSWORD = "1234345";


    public function getinfo(){
        echo "Name is = ".self::NAME. " & She live in".self::CITY."<br/>";
        }
    public function getaccess(){
         echo "Email is = ".self::EMAIL. " & Password is".self::PASSWORD."<br/>";
        }
}

class Kit1 extends Classconstant{

}
class Kit2 extends Classconstant{
    public function getcontent(){
        echo "Name is = ".self::NAME. " & She live in".self::CITY."<br/>";
    }
    public function getemail(){
        echo "Email is".self::EMAIL. "<br/>";
    }
    public function getpassword(){
        // echo "Password is".self::PASSWORD. "<br/>"; //Error bz private Constant
    }

}

echo "This is Class Constant . <br/>";
echo "<hr/>";

$obj = new Classconstant();
echo Classconstant::NAME."<br/>";//Honey Nway Oo

echo $obj::CITY."<br/>";//Yangon
// echo $obj::EMAIL."<br/>"; error bz protected
// echo Classconstant::PASSWORD."<br/>";//error bz private

//
$obj->getinfo();// Name is = Honey Nway Oo & She live inYangon
$obj->getaccess();// Email is = honeynwayoo@gmail.com & Password is1234345

echo "<hr/>";

$kk1 =new Kit1();
echo $kk1::NAME."<br/>";
echo Kit1::CITY."<br/>";

// echo $kk1::EMAIL."<br/>"; error bz protected
// echo Kit1::PASSWORD."<br/>";//error bz private
$obj->getinfo();// Name is = Honey Nway Oo & She live inYangon
$obj->getaccess();// Email is = honeynwayoo@gmail.com & Password is1234345

echo "<hr/>";
$kk2 =new Kit2();

echo $kk2::NAME."<br/>";
echo Kit2::CITY."<br/>";

// echo $obj::EMAIL."<br/>"; error bz protected
// echo Classconstant::PASSWORD."<br/>";//error bz private

$kk2->getinfo();// Name is = Honey Nway Oo & She live inYangon
$kk2->getaccess();// Email is = honeynwayoo@gmail.com & Password is1234345

$kk2->getemail();//Email is = honeynwayoo@gmail.com 
//$kk2->getpassword();//Error bz it's was private
echo "<hr/>";

?>
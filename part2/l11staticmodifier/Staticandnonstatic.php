
<?php
class Staticandnonstatic{

    // Member variables


    //Non-static property
    public $fulname='Nay Mon';

    //Static property
    public static $city="Mandalay" ;

    //Constant
    const GENDER = "female";

    //Member Methods
    //Static method can't call non static properties
    //Static method can't call non static method




    //Non-static Method
    //Non-Static method can call non static properties and static propeties
    //Non-Static method can call non static method and static methode

    public function getname(){ 
        echo "I am Non-static method <br/>";
        echo "Name is $this->fulname <br/>";
    }

    public function getcity(){ 
        echo "I am Non-static method <br/>";
        echo "City is " . self::$city." <br/>";
    }
    public function getgender(){ 
        echo "I am Non-static method <br/>";
        echo "Gender is " . self::GENDER." <br/>";
    }
    
    //Static Method
    public static function getstaticcity(){
        echo "I am static method <br/>";
        echo "City is " . self::$city." and home town is".static::$city."<br/>";
    }
    public static function getstaticgender(){
        echo "I am static method <br/>";
        echo "Gender is " . self::GENDER."<br/>";
    }


}

echo " this is Static and non static properties";
echo "<hr/>";

$obj =new Staticandnonstatic();
echo $obj->fulname;//Nay MOn
echo "<br/>";

echo $obj::$city;//Mandalay
echo "<br/>";
echo Staticandnonstatic::$city;;//Mandalay
echo "<br/>";

echo $obj::GENDER;//female
echo Staticandnonstatic::GENDER;;//female
echo "<br>";


//Non static Method
echo $obj->fulname;//Nay MOn
echo "<br/>";

//Static method
$obj::getstaticcity();
$obj::getstaticgender();


Staticandnonstatic::getstaticcity();
Staticandnonstatic::getstaticgender();
?>
<?php
 

 //Note :: Type hinting is concept that provides hits to function or method for the expected data types of arguments


 // Advantages of type hinting
        // helps users debug the code easily or the code provides error very specifically
        // a greate concept for static kind of data 

 // Disadvantages of type hinting
        // function or method only take one type of data
        // the dynamic data or argument are not there

 declare(strict_types=1);

 ini_set('display_errors',1);
 class Mytypehinting{

    public function getdata($val){
        echo $val. "<br/>";
    }

 }



echo"This is My Type hinting <br/>";
$obj1 = new Mytypehinting();
$obj1 -> getdata('aungaung');
$obj1 -> getdata('10');
$obj1 -> getdata(100);
$obj1 -> getdata(25.45);
$obj1 -> getdata(true);
$obj1 -> getdata(['red','blue','green']);

echo "<hr/>";


class Typehinting2{

    public function getdata(string $val){
        echo $val. "<br/>";
    }

 }


$obj2 = new Typehinting2();
$obj2 -> getdata('aungaung');
$obj2 -> getdata('10');
// $obj2 -> getdata(100);
// $obj2 -> getdata(25.45);
// $obj2 -> getdata(true);
// $obj2 -> getdata(['red','blue','green']); //Error


echo "<hr/>";

class Typehinting3{

    public function getdata(int $val){
        echo $val. "<br/>";
    }

 }


$obj3 = new Typehinting3();
// $obj3 -> getdata('aungaung');
// $obj3 -> getdata('10');
$obj3 -> getdata(100);
// $obj2 -> getdata(25.45);
// $obj2 -> getdata(true);
// $obj2 -> getdata(['red','blue','green']); //Error


echo "<hr/>";


class Typehinting4{

    public function getdata(bool $val){
        echo $val. "<br/>";
    }

 }

$obj4 = new Typehinting4();
// $obj4->getdata('aungaung');
// $obj4 -> getdata('10');
// $obj4 -> getdata(100);
// $obj4 -> getdata(25.45);
$obj4 -> getdata(true);
// $obj4 -> getdata(['red','blue','green']); //Error


echo "<hr/>";


class Typehinting5{

    public function getdata(float $val){
        echo $val. "<br/>";
    }

 }

$obj5 = new Typehinting5();
// $obj5->getdata('aungaung');
// $obj5 -> getdata('10');
$obj5 -> getdata(100);
$obj5 -> getdata(25.45);
// $obj5 -> getdata(true);
// $obj5 -> getdata(['red','blue','green']); //Error


echo "<hr/>";



class Typehinting6{

    public function getdata(array $val){
        echo $val. "<br/>";
    }

 }

$obj6 = new Typehinting6();
// $obj6->getdata('aungaung');
// $obj6 -> getdata('10');
// $obj6 -> getdata(100);
// $obj6 -> getdata(25.45);
// $obj6 -> getdata(true);
$obj6 -> getdata(['red','blue','green']); //Error


echo "<hr/>";


class Typehinting7{

    public function total(array $arrs){
         $result = 0;

         foreach($arrs as $arr)
         {
            // $result += $arr;
            $result = $result + $arr;
         }
         echo $result;
    }

 }

$obj7 = new Typehinting7();
$obj7 -> total([10,20,30,40,50,60]); //210


echo "<hr/>";

class Phone{
    protected $brand;
    protected $hasfacesensor;
    protected $numberofsim;
    protected $price;

    public function setbrand(string $value)
    {
        $this->brand= $value;
    }
    public function sethasfacesensor(bool $value)
    {
        $this->hasfacesensor= $value;
    }
    public function setnumberofsim(int $value)
    {
        $this->numberofsim= $value;
    }

    public function setprice( float $value)
    {
        $this->price= $value;
    }

    public function getinfo(){
        echo "Brand name is $this->brand <br/> Face sensor is = $this->hasfacesensor <br/> Number of Sim = $this->numberofsim <br/> Price is = $this->price";
    }
    }


    $objphone = new Phone();
    $objphone->setbrand('Iphone');
    $objphone->sethasfacesensor(true);
    $objphone->setnumberofsim(3);
    $objphone->setprice(999.5423);

    $objphone->getinfo();

    echo "<hr/>";

?>

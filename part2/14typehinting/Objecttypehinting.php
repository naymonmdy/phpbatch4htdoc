<?php

class Name{

    public $name = "Nay Mon";
    public function friend(){
        return " My friend name is $this->name";
    }

}
 function showresult(Name $val)
    {
        echo $val->friend();
    }

echo " This is object type hinting <br/>";
$obj1 =new Name();

showresult($obj1);

echo"<hr/>";



class Brand{

    public function getjpnbrand(){
        return " Toyota Brand <br/>";
    }
    public function getchinabrand(){
        return " BYD Brand <br/>";
    }

}

class Car{
    public function getbrand(Brand $val){
        return $val;
    }
    public function getjpn(Brand $val){
        return $val->getjpnbrand();
    }
    public function getchn(Brand $val){
        return $val->getchinabrand();
    }

}

$objbrand = new Brand();
$objcar = new Car();

echo $objcar->getbrand($objbrand)->getjpnbrand();
echo $objcar->getbrand($objbrand)->getchinabrand();

echo $objcar->getjpn($objbrand);
echo $objcar->getchn($objbrand);

echo"<hr/>";

?>
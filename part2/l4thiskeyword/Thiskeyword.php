<?php

class Thiskeyword{
    //Access Modifier
       //public 
       //private  => only access inside main class
       //protected => subclass /extended class

       public $companyname = "Data Land Technology";//can access from anywhere
       private $jobtitle ="Manager";//can't access from outside
       protected $location ="Yangon";//can't access from outside
 
       public function getinfo()  {
        $num =10;
        echo $num."<br/>";
     
        echo $this->companyname;//to get pubic variable with this
        echo $this->jobtitle;
        echo $this->location;

        
       }
       public function getcompanyname() {
        echo $this->companyname;
        echo "<br/>";

        $this->companyname ="ABC Co.ltd";
        echo $this->companyname;//ABC Co.ltd

        $this->jobtitle="Director";
        echo $this->jobtitle;//Director

        $this->location="Mawlamyine";
        echo $this->location;//Mawlamyine
       }

 }
 class Vehicle{
    public $brand = "Toyota";
    public  function getbrandname(){
        return $this->brand;
    }

    public function setbrandname($name){
        $this->brand = $name;
    }


 }
        
$obj = new Thiskeyword();
echo "This is Keywrord</br>";

echo $obj->companyname."<br/>";//Data Land Technology

echo $obj->getinfo();//10 Data Land Technology // Mangager / Yangon

echo "<hr/>";

echo $obj->getcompanyname();//ABC Co.ltd /Director/Mawlamyine

echo $obj->companyname."<br/>";//ABC Co.ltd
// echo $obj->jobtitle."<br/>"; error
// echo $obj->location."<br/>";error

echo "<hr/>";


$obj2= new Vehicle();

echo $obj2->brand. "<br/>";//Toyota
echo $obj2->getbrandname();//Toyota
echo "<hr/>";

echo $obj2->setbrandname("Suzuki");//Suziki
echo $obj2->getbrandname();//Suzuki
echo "<hr/>";


echo $obj2->setbrandname("Mazda");//Mazda
echo $obj2->getbrandname();//Mazda
        

?>
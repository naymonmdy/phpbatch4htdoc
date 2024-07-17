<?php

class Myacessmodifier{
    //Access Modifier
       //public 
       //private  => only access inside main class
       //protected => subclass /extended class

       public $companyname = "Data Land Technology";
       var $personname ="Mr.Tin";
       private $jobtitle="Manager";//cant print from outside

       protected $location ="Yangon";
       public function getinfo()  {
        $num =10;
        echo $num;
        //echo $companyname;//cant' print
        //echo $personame;//cant' print
        // echo $jobtitle; //cant' print
        // echo $location;//cant' print
        
       }

 }
        
$obj = new Myacessmodifier();
echo "This is Access modifier</br>";

echo $obj->companyname. "<br/>";//Data land Technology;
echo $obj->personname. "<br/>";//Mr.Tin;

$obj->getinfo();
echo "<hr/>";

$obj->companyname ="ABC Co.LTD";
echo $obj->companyname ."<br/>"; //ABC Co.LTD


$obj->personname ="Ko Tha";
echo $obj->personname ."<br/>"; //Ko Tha
echo "<hr/>";

// error $obj->jobtitle = "";
echo "<hr/>";
// error $obj->location = "";
echo "<hr/>";




        

?>
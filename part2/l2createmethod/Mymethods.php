<?php

class Mymethods{
    //Access Modifier
       //public 
       //private  => only access inside main class
       //protected => subclass /extended class

    public function greeting(){
        echo "Have a good day;";
    }
    public function calculate($num){
        echo "Getting result number is = {$num} </br>";
    }

    //with default value
    public function result($num=1){
        echo "Getting result number is = {$num} </br>";
    }
 }
        
$obj = new Mymethods();
echo "This is class object</br>";

$obj->greeting();
echo "<br/>";


$obj->calculate(200);
$obj->result();
$obj->calculate(400);
$obj->calculate(700);


        

?>
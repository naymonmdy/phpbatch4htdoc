<?php

// Data Binding
    //1. Static Binding or Early Binding
    //2. Dynamic Binding or Late Binding or Late Static Binding

//Class Object
class hola1{
   public $name= "Ko Ko";

   public function friend(){   
    return "My best friend name is ".$this->name."<br/>";
   }

   public function getfriend(){
    echo $this->friend();
   }
   
}

class hola2 extends hola1{
    public function friend(){   
        return "My best friend name is ".$this->name."and Su Su <br/>";
       }
}



echo"This is My binding <br/>";



?>

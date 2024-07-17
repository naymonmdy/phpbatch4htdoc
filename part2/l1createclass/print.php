<?php


// include("Myproperties.php");
// require("Myproperties.php");

// include_once("Myproperties.php");
// require_once("Myproperties.php");


//==>Define Class Object
        // class Classname{
        //     //properties;
        //     //method;
        // }

        // new Classname();

class Myproperties{
    //properties
    var $firstname = "Data Land";
    var $lastname = "Technoland";
}

$obj = new Myproperties();

echo "This is class object<br/>";

echo $obj->firstname ." ". $obj->lastname ."";
?>
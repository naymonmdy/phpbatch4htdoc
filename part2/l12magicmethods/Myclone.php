
<?php

class Myclone{

    public function project($name){
        echo" I created a new ${name} project. <br/>";
    }

    public function task(){
        echo" I created a new task .<br/>";
    }

    public function __call($method,$vals){
        echo "You not yet define these \"${method}\"non-static method. so your value are= "."<pre>".print_r($vals,true)."</pre>"." arer here <br/>";
    }
    public static function exam(){
        echo "I am new exam <br/>";

    }
    public function __callStatic($method, $vals){
        echo "You not yet define these \"${method}\" static method. so your value are= "."<pre>".print_r($vals,true)."</pre>"." arer here <br/>";
    }

}




echo"This is Clone <br/>";

$obj1 = new Myclone();
$obj1->project("POS");//I created a new POS project.
$obj1->project("Book Shop");////I created Book Shop project.


$obj2 = $obj1;//copy by reference
$obj2->project("CMS");//I created CMS project.

$obj3 = clone $obj1;//Cloning 
echo "<hr/>";

if(method_exists('Myclone',"task")){
    $obj1->task();

}
else{
    echo "No methods exits";
}



if(method_exists($obj1,"task")){
    $obj1->task();

}
else{
    echo "No methods exits";
}


if(method_exists(new Myclone(),"task")){
    $obj1->task();

}
else{
    echo "No methods exits";
}

if(method_exists(new Myclone,"exam")){
    $obj1::exam();

}
else{
    echo "No methods exits";
}

if(method_exists($obj2,"exam")){
    $obj1::exam();

}
else{
    echo "No methods exits";
}

if(method_exists($obj3,"exam")){
    $obj1::exam();

}
else{
    echo "No methods exits";
}
?>
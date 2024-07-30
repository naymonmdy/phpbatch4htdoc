<?php

class Mystaticmodifier{

    //This is static is ongoing variable
    public static $count=0;
    //Non static is reset value if change variable
    public $idx= 0; 

    public function getvalue() {
        self::$count++;
        echo self::$count."<br/>";

        $this ->idx++;
        echo $this ->idx."<br/>";
    }


 public function getresult() {
        self::$count++;
        echo self::$count."<br/>";

        $this ->idx++;
        echo $this ->idx."<br/>";
    }

}

class Baby1 extends Mystaticmodifier{

}


class Baby2 extends Mystaticmodifier{
   public function getmore(){
    self::$count++;
    echo self::$count."<br/>";

    $this ->idx++;
    echo $this ->idx."<br/>";

   }


}


echo "This is Static Modifier";

$obj1 = new Mystaticmodifier();
echo $obj->idx;// Static

echo "<hr/>";


$obj1->getvalue(); //1 1
$obj1->getvalue(); //2 2
$obj1->getvalue(); //3 3 
$obj1->getvalue(); //4 4


echo "<hr/>";
$obj1->getresult();//5 5
$obj1->getresult();//6 6
$obj1->getresult();//7 7
$obj1->getresult();//8 8
echo "<hr/>";

$obj2 =new Mystaticmodifier();

$obj2->getvalue();//9 1
$obj2->getvalue();//10 2
$obj2->getvalue();//11 3
$obj2->getvalue();//12 4


echo "<hr/>";
$obj2->getresult();
$obj2->getresult();
$obj2->getresult();
$obj2->getresult();
echo "<hr/>";

$obj3 =new Baby1();

$obj3->getvalue();
$obj3->getvalue();
$obj3->getvalue();
$obj3->getvalue();


echo "<hr/>";
$obj3->getresult();
$obj3->getresult();
$obj3->getresult();
$obj3->getresult();
echo "<hr/>";

echo "get more <hr/>";

$obj4 =new Baby2();
$obj4->getmore();
$obj4->getvalue();
$obj4->getvalue();
$obj4->getvalue();

echo "<hr/>";
?>

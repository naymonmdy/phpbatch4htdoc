<?php

//Note:: Interface can't include body
//Note:: Modifier must be public in interface bz we need to override
//Note:: To use interface ,need implements keyword
//Note:: A class that implements an interface must implements all of interface's methods;
//Note:: Can't contain properties and common methodes but can contain CONSTANT variable;
interface News{
    const CAPTION="This is new article for SPORT";
    public function createpost();
    public function readpost($id);
    public function updatepost($id,$title);
    public function deletepost($id);

}


class Myinterface implements News{
    public function createpost(){
        echo"I am from create post.".self::CAPTION."<br/>";


    }
    public function readpost($id){
        echo"I am from read post. and id is ={$id} .<br/>";

    }
    public function updatepost($id,$title){
        echo"I am from update post. and id is ={$id} . and title is {$title}. <br/>";

    }
    public function deletepost($id){
        echo"I am from delete post.";

    }
    public function test(){
        echo "I ma test";

    }
}
class Article implements News{
    public function test(){
        echo "I ma test";

    }
    public function createpost(){
        echo"I am from create article post.".self::CAPTION."<br/>";


    }
    public function readpost($id){
        echo"I am from read article post. and id is ={$id} .<br/>";

    }
    public function updatepost($id,$title){
        echo"I am from update article post. and id is ={$id} . and title is {$title}. <br/>";

    }
    public function deletepost($id){
        echo"I am from delete article post.";

    }
  
   
}

echo "This is my Interface <br/>";
echo "<hr/>";

$obj=new Myinterface();
$obj->createpost();
$obj->readpost(10);
$obj->updatepost(10,"This is new post 10");
$obj->deletepost(10);
$obj->test();
echo "<hr/>";

$obj2=new Article();
$obj2->createpost();
$obj2->readpost(10);
$obj2->updatepost(10,"This is new article post 10");
$obj2->deletepost(10);
$obj2->test();
echo "<hr/>";

?>

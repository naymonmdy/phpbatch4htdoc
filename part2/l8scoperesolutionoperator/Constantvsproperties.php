<?php   
class Constantvsproperties{

    const ARTICLE = "This is new article for sport";
    const TOPIC = "This is new Topic for sport";

    public $post="This is new post for sport";

    public function contentone(){
        echo self::ARTICLE ."<br/>";
        echo static::TOPIC ."<br/>";

        echo $this->post. "<br/>";
    }
}
class Baby1 extends Constantvsproperties{
    const ARTICLE = "This is new article for Polictical";
    const TOPIC = "This is new Topic for Polictical";

    public $post="This is new post for Polictical";
    public function contenttwo(){
        echo self::ARTICLE ."<br/>";
        echo static::TOPIC ."<br/>";

        echo $this->post. "<br/>";
    }
    
}
echo " This is Constant vs Properties. <br/>";
$obj =new Constantvsproperties();
$obj->contentone();
// This is new article for sport
// This is new Topic for sport
// This is new post for sport
echo "<hr/>";
$bb1 =new Baby1();
$bb1->contentone();
echo "<hr/>";
// This is new article for sport
// This is new Topic for Polictical
// This is new post for Polictical
$bb1->contenttwo();
// This is new article for Polictical
// This is new Topic for Polictical
// This is new post for Polictical
echo "<hr/>";
?>